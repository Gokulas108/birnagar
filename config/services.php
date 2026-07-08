<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'icici' => [
        'merchant_id' => env('ICICI_MERCHANT_ID'),
        'aggregator_id' => env('ICICI_AGGREGATOR_ID'),
        'secret_key' => env('ICICI_SECRET_KEY'),
        'initiate_sale_url' => env('ICICI_INITIATE_SALE_URL'),
    ],

    // Shared secret for the wall-of-legacy reconciliation dashboard's read-only
    // donations export (server-to-server; sent as the X-Export-Key header).
    'wall' => [
        'export_key' => env('WALL_EXPORT_KEY'),
    ],

    // Doubletick WhatsApp (used to send the donation receipt on a completed web
    // donation). Same account/key as the-wall-next app.
    'doubletick' => [
        'api_key' => env('DOUBLETICK_API_KEY'),
        'waba_number' => env('DOUBLETICK_WABA_NUMBER', '919002977288'),
        'language' => env('DOUBLETICK_TEMPLATE_LANGUAGE', 'en'),
        'receipt_template' => env('DOUBLETICK_RECEIPT_TEMPLATE', 'general_donation_receipt'),
    ],

    // Stateless pdf-server (Heroku) that fills the receipt AcroForm template.
    'pdf' => [
        'receipt_url' => env('PDF_RECEIPT_URL', 'https://sbvt-pdf-gen-13a632ead426.herokuapp.com/generate-reciept'),
    ],

];
