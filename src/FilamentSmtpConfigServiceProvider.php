<?php

namespace Ahmedeid\FilamentSmtpConfig;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Eloquent\Model;
use Ahmedeid\FilamentSmtpConfig\Resources\MailSettingResource;
use Ahmedeid\FilamentSmtpConfig\Database\Seeders\MailSettingSeeder;

class FilamentSmtpConfigServiceProvider extends ServiceProvider
{
    protected array $resources = [
        MailSettingResource::class,
    ];

    public function register(): void
    {
        // إضافة تسجيلات الحزمة هنا
    }

    public function boot(): void
    {
        // نشر ملف الإعدادات إلى المسار المناسب في تطبيقك
        $this->publishes([
            __DIR__ . '/config/filament-smtp-config.php' => config_path('filament-smtp-config.php'),
        ], 'filament-smtp-config');

        // إذا كان التطبيق يعمل في وضع الكونسول، نقوم بنقل الأوامر
        if ($this->app->runningInConsole()) {
            Model::unguard(); // تعطيل حماية النموذج في وضع الكونسول
            Artisan::call('migrate',['--path' => __DIR__ . '/database/migrations']);
            Artisan::call('db:seed', ['--class' => MailSettingSeeder::class]);
        }
    }
}
