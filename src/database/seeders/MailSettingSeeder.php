<?php
namespace Ahmedeid\FilamentSmtpConfig\Database\Seeders;

use Illuminate\Database\Seeder;
use Ahmedeid\FilamentSmtpConfig\Models\MailSetting;

class MailSettingSeeder extends Seeder {
    public function run(): void {
        MailSetting::updateOrCreate(
            ['host' => 'smtp.example.com'], // شرط البحث لتجنب التكرار
            [
                'mailer' => 'smtp',
                'host' => 'smtp.example.com',
                'port' => 587,
                'username' => 'your-email@example.com',
                'password' => 'your-password',
                'encryption' => 'tls',
                'from_address' => 'your-email@example.com',
                'from_name' => 'Your App Name',
            ]
        );
    }
}
