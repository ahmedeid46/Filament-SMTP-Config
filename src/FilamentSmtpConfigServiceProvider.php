<?php

namespace Ahmedeid\FilamentSmtpConfig;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Ahmedeid\FilamentSmtpConfig\Resources\MailSettingResource;
use Ahmedeid\FilamentSmtpConfig\Database\Seeders\MailSettingSeeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Eloquent\Model;

class FilamentSmtpConfigServiceProvider extends PluginServiceProvider {
    protected array $resources = [
        MailSettingResource::class,
    ];

    public function configurePackage(Package $package): void {
        $package->name('filament-smtp-config')
            ->hasConfigFile()
            ->hasMigration('create_mail_settings_table')
            ->hasSeeders([
                MailSettingSeeder::class,
            ])
            ->hasCommand(
                \Ahmedeid\FilamentSmtpConfig\Commands\PublishConfigCommand::class
            );
    }

    public function boot(): void {
        parent::boot();

        if ($this->app->runningInConsole()) {
            Model::unguard();
            Artisan::call('db:seed', ['--class' => MailSettingSeeder::class]);
        }
    }
}
