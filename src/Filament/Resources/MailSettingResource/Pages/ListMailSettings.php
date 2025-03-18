<?php

namespace Ahmedeid\FilamentSmtpConfig\Filament\Resources\MailSettingResource\Pages;

use Ahmedeid\FilamentSmtpConfig\Filament\Resources\MailSettingResource;
use Filament\Resources\Pages\ListRecords;

class ListMailSettings  extends ListRecords
{
    protected static string $resource = MailSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
