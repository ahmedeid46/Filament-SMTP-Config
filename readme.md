# Filament SMTP Config

## Introduction
The **Filament SMTP Config** library provides a flexible interface for managing SMTP settings within the Filament Admin Panel, allowing users to easily modify email settings without manually editing the `.env` file.

## Features
✅ Direct integration with the Filament Admin Panel.  
✅ Save and manage SMTP settings in the database easily.  
✅ Automatic Seeder execution upon library installation.  
✅ Support for manually publishing settings via Artisan commands.

---

## 1️⃣ Installation

To install the library within a Laravel project, use the following command:
```sh
composer require ahmedeid/filament-smtp-config
```
After installation, run the migration to create the settings table:

```sh
php artisan migrate
```

### Running Seeder Manually
If you'd like to insert the default settings manually, execute the following command:

```sh
php artisan db:seed --class="ahmedeid\\FilamentSmtpConfig\\Database\\Seeders\\MailSettingSeeder"
```


## 2️⃣ Usage
Modify your Filament Panel Configuration to include the plugin:

```php
use ahmedeid\FilamentSmtpConfig\FilamentSmtpConfigPlugin;
...
    public function panel(Panel $panel): Panel
    {
        return $panel
            ...
            ->plugin(
                FilamentSmtpConfigPlugin::make()
            )
            ...
    }
```


## 3️⃣ Publish Settings

To publish the SMTP settings, run the following command:

```sh
php artisan vendor:publish --tag=filament-smtp-config
```
This will copy the settings from the database to the `.env` file, enabling you to easily modify SMTP settings within the Admin Panel.

## 4️⃣ Uninstalling the Library
To remove the library from the project, use the following command:

```sh
composer remove ahmedeid/filament-smtp-config
```
Then, roll back the settings table:

```sh
php artisan migrate:rollback --step=1
```
## 📌 Conclusion
Filament SMTP Config offers an easy and convenient way to manage email settings within Laravel + Filament, making it easier for developers to control the settings without manual edits to environmental files. 🚀
