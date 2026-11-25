# Stodio for Statamic

Stodio is an architecture and interior design studio website starter kit by [Rad Themes](https://statamic.com/creators/rad-themes). It uses native Statamic collections, Antlers, and Tailwind CSS 4. All imagery is bundled locally. No Webflow runtime or paid addon is required.

Build a modern spatial design website with architectural capabilities, project portfolio, spatial essays journal, engagement scopes, and project inquiry forms.

## Included

- Six main pages: home, capabilities, projects, scope, journal, and contact.
- Four architectural capabilities, four project showcases, and four spatial essays, each with a detail page.
- Native navigation, brand/contact globals, managed images, SEO fields, mobile navigation, and a custom 404 page.
- Inquiry form with server validation, CSRF protection, honeypot, and submissions stored in the Control Panel.

## Requirements

- Statamic 6.34 or later in the 6.x series.
- PHP 8.3 or newer within 8.x and Composer 2.
- Node.js 22.12 or newer and npm.

## Installation

```sh
composer config repositories.stodio path /absolute/path/to/stodio
php please starter-kit:install rad-themes/stodio --local --without-user --clear-site
php please make:user
php please stache:refresh
npm ci
npm run build
php artisan serve
```

## Checks

```sh
php artisan test --compact tests/Feature/StodioKitTest.php
npm run build
```
