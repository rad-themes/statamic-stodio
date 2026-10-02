<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\Attributes\DataProvider;
use Statamic\Facades\FormSubmission;
use Statamic\Facades\Stache;
use Tests\TestCase;

class StodioKitTest extends TestCase
{
    public function test_homepage_renders_stodio_content_and_native_navigation(): void
    {
        $this->withoutVite();

        $response = $this->get('/');

        $response->assertOk()->assertSeeText('Designing spaces that harmonize structure and spirit.');
        $response->assertSee('href="/services"', false);
        $response->assertSee('mailto:studio@stodio.test', false);
        $response->assertDontSee('webflow.js');
    }

    public function test_capability_detail_renders_from_a_collection_entry(): void
    {
        $this->withoutVite();

        $response = $this->get('/services/architectural-design');

        $response->assertOk()->assertSeeText('Architectural Design');
        $response->assertSeeText('Comprehensive residential and commercial building design.');
    }

    public function test_contact_page_uses_a_real_form_with_validation_fields(): void
    {
        $this->withoutVite();

        $response = $this->get('/contact');

        $response->assertOk()->assertSee('method="POST"', false);
        $response->assertSee('name="email"', false);
        $response->assertSee('name="_token"', false);
    }

    #[DataProvider('pageRoutes')]
    public function test_each_content_route_renders_with_a_title(string $route, string $title): void
    {
        $this->withoutVite();

        $this->get($route)->assertOk()->assertSeeText($title);
    }

    /** @return array<string, array{string, string}> */
    public static function pageRoutes(): array
    {
        return [
            'services' => ['/services', 'Services'],
            'projects' => ['/cases', 'Projects'],
            'scope' => ['/pricing', 'Scope'],
            'journal' => ['/blog', 'Journal'],
            'contact' => ['/contact', 'Contact'],
            'architectural design' => ['/services/architectural-design', 'Architectural Design'],
            'interior styling' => ['/services/interior-styling', 'Interior Design'],
            'minimalist villa' => ['/cases/minimalist-villa', 'Minimalist Villa'],
            'urban loft' => ['/cases/urban-loft', 'Urban Loft'],
            'material article' => ['/blog/material-selection-guide', 'Tactile materiality in modern living'],
            'spatial article' => ['/blog/spatial-flow-and-light', 'Mastering spatial flow and natural light'],
        ];
    }

    public function test_invalid_quote_is_rejected_by_server_validation(): void
    {
        $this->postJson('/!/forms/quote', [
            'email' => 'invalid-email',
            'message' => 'short',
        ])->assertUnprocessable()->assertJsonValidationErrors(['name', 'email', 'message']);
    }

    public function test_valid_quote_is_stored_and_honeypot_submission_is_discarded(): void
    {
        Mail::fake();
        $submissionDirectory = sys_get_temp_dir().'/stodio-forms-'.bin2hex(random_bytes(8));
        Stache::store('form-submissions')->directory($submissionDirectory.'/');

        try {
            $details = [
                'name' => 'Stodio Client',
                'email' => 'client@architects.com',
                'message' => 'We would like to commission a residential design study.',
            ];

            $this->postJson('/!/forms/quote', $details)
                ->assertOk()->assertJson(['success' => true, 'submission_created' => true]);

            $submissions = FormSubmission::whereForm('quote');
            $this->assertCount(1, $submissions);
            $this->assertSame($details['email'], $submissions->first()->get('email'));
            $this->assertFileExists($submissions->first()->path());

            $this->postJson('/!/forms/quote', [...$details, 'website' => 'spam.example.com'])
                ->assertOk()->assertJson(['success' => true, 'submission_created' => false]);

            $this->assertCount(1, FormSubmission::whereForm('quote'));
            Mail::assertNothingSent();
        } finally {
            File::deleteDirectory($submissionDirectory);
        }
    }

    public function test_missing_page_shows_the_custom_not_found_page(): void
    {
        $this->withoutVite();

        $this->get('/missing-stodio-page')->assertNotFound()->assertSeeText('404');
    }
}
