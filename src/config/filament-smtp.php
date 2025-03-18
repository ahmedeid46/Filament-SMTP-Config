<?php

use Ahmedeid\FilamentSmtpConfig\Models\MailSetting;

$mailSettings = MailSetting::first() ?? new MailSetting();

return [
    'default' => $mailSettings->mailer ?? env('MAIL_MAILER', 'smtp'),

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => $mailSettings->host ?? env('MAIL_HOST', 'smtp.example.com'),
            'port' => $mailSettings->port ?? env('MAIL_PORT', 587),
            'encryption' => $mailSettings->encryption ?? env('MAIL_ENCRYPTION', 'tls'),
            'username' => $mailSettings->username ?? env('MAIL_USERNAME'),
            'password' => $mailSettings->password ?? env('MAIL_PASSWORD'),
        ],
    ],

    'from' => [
        'address' => $mailSettings->from_address ?? env('MAIL_FROM_ADDRESS', 'your-email@example.com'),
        'name' => $mailSettings->from_name ?? env('MAIL_FROM_NAME', 'Your App'),
    ],
];
