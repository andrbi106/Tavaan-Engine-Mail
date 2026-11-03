<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Mail Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور mail — همهٔ کلیدهای مستندشده در `docs/03-engines/mail.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/mail.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('MAIL_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('MAIL_PREFIX', 'mail:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('MAIL_LOG_CHANNEL', 'mail'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Mail',
        'accessor' => 'mailer',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];