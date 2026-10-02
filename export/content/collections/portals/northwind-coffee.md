---
id: 63c2a7e5-dd97-42af-9e3d-1acccf41eede
blueprint: portal
title: 'Northwind Coffee — Rebrand & Website'
project_status: 'Phase 2 · Design'
welcome:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Hi Maya — everything for your rebrand and new website lives here. We’ll keep this page up to date as the project moves along.'
clients:
  - 60a0bc57-c13a-4af0-bab1-4e836a94a8ea
comments_enabled: true
phases:
  -
    id: discovery
    title: Discovery
    modules:
      -
        id: brief
        type: content
        title: 'Project brief'
        description: 'Goals, audience, scope and timeline.'
        status: complete
        completed_at: '2026-09-21T12:01:56+00:00'
        body:
          -
            type: heading
            attrs:
              level: 2
            content:
              -
                type: text
                text: Goals
          -
            type: bulletList
            content:
              -
                type: listItem
                content:
                  -
                    type: paragraph
                    content:
                      -
                        type: text
                        text: 'A warmer, more premium brand that still feels local'
              -
                type: listItem
                content:
                  -
                    type: paragraph
                    content:
                      -
                        type: text
                        text: 'A fast website that sells beans and subscriptions'
              -
                type: listItem
                content:
                  -
                    type: paragraph
                    content:
                      -
                        type: text
                        text: 'Launch before the holiday season'
          -
            type: heading
            attrs:
              level: 2
            content:
              -
                type: text
                text: Audience
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Coffee lovers aged 25–45 who care where their beans come from and buy online at least once a month.'
          -
            type: heading
            attrs:
              level: 2
            content:
              -
                type: text
                text: Timeline
          -
            type: bulletList
            content:
              -
                type: listItem
                content:
                  -
                    type: paragraph
                    content:
                      -
                        type: text
                        text: 'Discovery — 2 weeks'
              -
                type: listItem
                content:
                  -
                    type: paragraph
                    content:
                      -
                        type: text
                        text: 'Design — 3 weeks'
              -
                type: listItem
                content:
                  -
                    type: paragraph
                    content:
                      -
                        type: text
                        text: 'Build & launch — 4 weeks'
      -
        id: kickoff
        type: link
        title: 'Kickoff call recording'
        description: 'Our first call, with notes.'
        status: complete
        completed_at: '2026-09-21T12:01:56+00:00'
        url: 'https://example.com/recording'
        button_label: 'Watch recording'
      -
        id: assets
        type: upload
        title: 'Your brand assets'
        description: 'Logo files, fonts and any photography you’d like us to use.'
        status: active
        client_can_complete: true
        complete_label: 'Done uploading'
  -
    id: design
    title: Design
    modules:
      -
        id: moodboard
        type: gallery
        title: Moodboard
        description: 'The visual direction we agreed on.'
        status: active
        images:
          - demo/type-specimen.png
          - demo/espresso.png
          - demo/harbour-green.png
          - demo/packaging.png
      -
        id: deck
        type: file
        title: 'Brand strategy deck'
        description: 'Positioning, voice and naming.'
        status: active
        files:
          - docs/northwind-brand-strategy.pdf
      -
        id: walkthrough
        type: embed
        title: 'Launch pop-up location'
        status: active
        embed_url: 'https://www.openstreetmap.org/export/embed.html?bbox=-122.4230%2C37.7990%2C-122.4020%2C37.8100&layer=mapnik&marker=37.8045%2C-122.4125'
        description: 'Where we’ll celebrate the new brand.'
      -
        id: figma
        type: link
        title: 'Website designs'
        description: 'Click through the Figma prototype and approve when you’re happy.'
        status: active
        due_date: '2026-10-04'
        url: 'https://www.figma.com'
        button_label: 'Open prototype'
        client_can_complete: true
        complete_label: 'Approve designs'
  -
    id: launch
    title: 'Build & launch'
    modules:
      -
        id: staging
        type: link
        title: 'Staging site'
        description: 'Unlocks once the designs are approved.'
        status: inactive
        url: 'https://staging.example.com'
      -
        id: checklist
        type: content
        title: 'Launch checklist'
        description: 'Everything we need from you before go-live.'
        status: inactive
        body: {}
messages:
  -
    id: '01'
    user: 3ef3ea0a-34c0-4ab2-ac2c-e92936660b3b
    body: 'Hi Maya! The brand strategy deck and moodboard are up. Have a look and tell us what you think.'
    at: '2026-09-28T10:12:00+00:00'
  -
    id: '02'
    user: 60a0bc57-c13a-4af0-bab1-4e836a94a8ea
    body: |-
      Love the moodboard — the espresso brown and serif type feel exactly right.
      Could we see one option with a warmer green?
    at: '2026-09-29T16:40:00+00:00'
  -
    id: '03'
    user: 3ef3ea0a-34c0-4ab2-ac2c-e92936660b3b
    body: 'Absolutely — we’ll add a warmer green to the prototype by Thursday.'
    at: '2026-09-30T09:01:56+00:00'
---
