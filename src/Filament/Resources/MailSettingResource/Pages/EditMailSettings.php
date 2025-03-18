<?php

namespace Ahmedeid\FilamentSmtpConfig\Filament\Resources\MailSettingResource\Pages;

use Ahmedeid\FilamentSmtpConfig\Filament\Resources\MailSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMailSettings extends EditRecord
{
    protected static string $resource = MailSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
