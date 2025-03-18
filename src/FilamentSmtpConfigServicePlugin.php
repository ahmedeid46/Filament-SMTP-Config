<?php

namespace Ahmedeid\FilamentSmtpConfig;

use Ahmedeid\FilamentSmtpConfig\Filament\Resources\MailSettingResource;
use Filament\Actions\StaticAction;
use Filament\Contracts\Plugin;
use Filament\Navigation\NavigationBuilder;
use Filament\Panel;
use SolutionForest\FilamentAccessManagement\Facades\FilamentAuthenticate;
use SolutionForest\FilamentAccessManagement\Http\Auth\Permission;
use SolutionForest\FilamentAccessManagement\Pages\Error as ErrorPage;
use SolutionForest\FilamentAccessManagement\Support\Utils;

class FilamentSmtpConfigServicePlugin  implements Plugin
{
    public function getId(): string
    {
        return 'filament-smtp-config-plugin';
    }
    public function register(Panel $panel): void
    {
        $panel->resources([
            MailSettingResource::class
        ]);
    }
    public function boot(Panel $panel): void
    {

    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        return filament(app(static::class)->getId());
    }

}
