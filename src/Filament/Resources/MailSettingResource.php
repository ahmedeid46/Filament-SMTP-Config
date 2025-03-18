<?php

namespace Ahmedeid\FilamentSmtpConfig\Filament\Resources;

use Ahmedeid\FilamentSmtpConfig\Filament\Resources\MailSettingResource\Pages\EditMailSettings;
use Ahmedeid\FilamentSmtpConfig\Filament\Resources\MailSettingResource\Pages\ListMailSettings;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Ahmedeid\FilamentSmtpConfig\Models\MailSetting;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class MailSettingResource extends Resource {
    protected static ?string $model = MailSetting::class;
    protected static ?string $navigationIcon = 'heroicon-o-mail';

    public static function form(Forms\Form $form): Forms\Form {
        return $form->schema([
            TextInput::make('mailer')->required(),
            TextInput::make('host')->required(),
            TextInput::make('port')->numeric()->required(),
            TextInput::make('username')->required(),
            TextInput::make('password')->password()->required(),
            TextInput::make('encryption')->nullable(),
            TextInput::make('from_address')->email()->required(),
            TextInput::make('from_name')->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table {
        return $table->columns([
            TextColumn::make('mailer'),
            TextColumn::make('host'),
            TextColumn::make('port'),
            TextColumn::make('from_address'),
            TextColumn::make('from_name'),
        ]);
    }

    public static function getPages(): array {
        return [
            'index' => ListMailSettings::route('/'),
            'edit' => EditMailSettings::route('/{record}/edit'),
        ];
    }
}
