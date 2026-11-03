# Tavaan Engine — Mail

> **پست الکترونیک** — موتور Mail در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.mail` |
| نام | `Mail` |
| عنوان فارسی | پست الکترونیک |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Mail` |
| نوع | `engine` |
| Facade | `Mail` (accessor: `mailer`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Mail\Contracts\TransportInterface`

## Facadeها

- `Tavaan\Engine\Mail\Facades\Mail`

## کلاس‌های اصلی

- `src/Attachment.php`
- `src/Events/MessageSending.php`
- `src/Events/MessageSent.php`
- `src/Jobs/SendQueuedMail.php`
- `src/MailException.php`
- `src/MailManager.php`
- `src/MailServiceProvider.php`
- `src/Mailable.php`
- `src/Mailer.php`
- `src/Message.php`
- `src/MimeBuilder.php`
- `src/Transports/ArrayAndLogTransports.php`
- `src/Transports/MailTransport.php`
- `src/Transports/SendmailTransport.php`
- `src/Transports/SesTransport.php`
- `src/Transports/SmtpTransport.php`

## Service Providerها

- `Tavaan\Engine\Mail\MailServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`
- `event`

## پیکربندی

- فایل پیکربندی: `config/mail.php`
- کلید: `mail`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Mail.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Mail`** (این مخزن) | موتور Mail |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
