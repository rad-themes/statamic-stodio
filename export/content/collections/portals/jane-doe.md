---
id: 973b4fba-503d-40cf-83ac-0876a8984624
blueprint: portal
title: 'Jane Doe'
project_status: Discovery
welcome:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Welcome! Everything for your project lives here: briefs, files, designs and approvals.'
phases:
  -
    id: phase-discovery
    title: Discovery
    modules:
      -
        id: brief
        type: content
        title: 'Project brief'
        description: 'Goals, audience and scope.'
        status: active
        body:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Replace this with your project brief.'
      -
        id: assets-upload
        type: upload
        title: 'Brand assets'
        description: 'Upload your logo, fonts and any existing brand guidelines.'
        status: active
        client_can_complete: true
        complete_label: 'Done uploading'
  -
    id: phase-design
    title: Design
    modules:
      -
        id: prototype
        type: embed
        title: 'Design prototype'
        description: 'Click through the latest designs.'
        status: inactive
        embed_url: 'https://www.figma.com/embed?embed_host=share&url=https://www.figma.com'
      -
        id: design-approval
        type: link
        title: 'Design sign-off'
        description: 'Approve the designs so we can start development.'
        status: inactive
        url: 'https://www.figma.com'
        button_label: 'Review designs'
        client_can_complete: true
        complete_label: 'Approve designs'
  -
    id: phase-launch
    title: Launch
    modules:
      -
        id: staging
        type: link
        title: 'Staging site'
        status: inactive
        url: 'https://staging.example.com'
        button_label: 'Visit staging'
clients:
  - cdb018a6-e698-4df3-b72f-4284f1406b0e
---
