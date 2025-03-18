<?php

namespace Ahmedeid\FilamentSmtpConfig\Models;

use Illuminate\Database\Eloquent\Model;

class MailSetting extends Model
{
    protected $fillable = [
        'mailer', 'host', 'port', 'username', 'password', 'encryption', 'from_address', 'from_name'
    ];
}
