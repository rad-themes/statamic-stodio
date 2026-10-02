---
id: f8847a6d-5016-439e-a94e-a4ee11d2709d
blueprint: portal
title: 'Acme Website Redesign'
project_status: 'In progress — saved from CP'
welcome:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Welcome! Everything for your project lives here: links, files and briefs.'
clients:
  - 262988dd-0627-445a-9ea2-a4e53bc945d7
phases:
  -
    id: ph1
    title: Discovery
    modules:
      -
        id: m1
        type: content
        title: 'Project brief'
        description: 'Goals, audience and scope.'
        status: complete
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
            type: paragraph
            content:
              -
                type: text
                text: 'Launch a faster, clearer site by Q4.'
        client_can_complete: false
        enabled: true
      -
        id: m2
        type: link
        title: 'Kickoff recording'
        description: 'Recording of our first call.'
        status: complete
        url: 'https://example.com/recording'
        button_label: Watch
        client_can_complete: true
        complete_label: 'Mark as watched'
        completed_at: '2026-09-28T10:13:33+00:00'
        completed_by: 262988dd-0627-445a-9ea2-a4e53bc945d7
        enabled: true
      -
        id: m5
        type: file
        title: 'Signed contract'
        status: active
        files:
          - docs/contract.pdf
        client_can_complete: false
        enabled: true
      -
        id: m6
        type: upload
        title: 'Brand assets'
        description: 'Upload your logo and fonts.'
        status: active
        uploads:
          - uploads/acme-website/20260928-101333-MMFQpR-logo.png
          - uploads/acme-website/20260928-101405-rgpBca-notes.txt
        client_can_complete: false
        enabled: true
  -
    id: ph2
    title: Design
    modules:
      -
        id: m3
        type: link
        title: 'Figma prototype'
        status: active
        due_date: '2026-10-15 00:00'
        url: 'https://figma.com'
        client_can_complete: false
        enabled: true
      -
        id: m4
        type: content
        title: 'Style guide'
        description: 'Unlocks after design approval.'
        status: inactive
        client_can_complete: false
        enabled: true
      -
        id: m7
        type: embed
        title: 'Walkthrough video'
        status: active
        embed_url: 'https://www.youtube.com/embed/dQw4w9WgXcQ'
        client_can_complete: false
        enabled: true
      -
        id: m8
        type: gallery
        title: Moodboard
        description: 'Visual direction we agreed on.'
        status: active
        images:
          - fleet/customs.webp
          - fleet/network.webp
          - fleet/platform.webp
        client_can_complete: false
        enabled: true
comments_enabled: true
messages:
  -
    id: 01M3KY2G7FEA4YWFCXCBZF06Q7
    user: 3ef3ea0a-34c0-4ab2-ac2c-e92936660b3b
    body: 'Hi! The first design round is up — let us know what you think.'
    at: '2026-09-28T11:58:14+00:00'
  -
    id: 01M3KY4G7HEF9ZF9VQRMMAX7HE
    user: 262988dd-0627-445a-9ea2-a4e53bc945d7
    body: 'Love the direction! Can we try a darker hero?'
    at: '2026-09-28T11:59:19+00:00'
  -
    id: 01M3M4R0GSSHJ3KRCT0N7VD2CV
    user: 262988dd-0627-445a-9ea2-a4e53bc945d7
    body: 'Second note <b>bold?</b>'
    at: '2026-09-28T13:54:50+00:00'
  -
    id: 01M3M4RDNXTBKA2Y1X5WYHDGR0
    user: 262988dd-0627-445a-9ea2-a4e53bc945d7
    body: 'Third note'
    at: '2026-09-28T13:55:03+00:00'
  -
    id: 01M3M9JERXP53DNNJYM6T10VFH
    user: 262988dd-0627-445a-9ea2-a4e53bc945d7
    body: 'Fourth note'
    at: '2026-09-28T15:19:11+00:00'
  -
    id: 01M3PB1BQZQQNH30NF4QAPBDGX
    user: dc38b729-187a-4668-a4f4-327e3e84e1c5
    body: 'Fifth one'
    at: '2026-09-29T10:23:17+00:00'
mute_notifications: false
disable_reminders: false
is_template: false
updated_by: 3ef3ea0a-34c0-4ab2-ac2c-e92936660b3b
updated_at: 1790608790
---
