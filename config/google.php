<?php
return [
    'project' => [
        'name' => 'GmailAPI',
        'number' => '611641103456',
        'id' => 'gmailapi-472906'
    ],
    'oauth' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect_uri' => env('GOOGLE_REDIRECT_URI'),
        'refresh_token' => env('GOOGLE_REFRESH_TOKEN')
    ]
];