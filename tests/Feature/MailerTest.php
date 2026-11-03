<?php

declare(strict_types=1);

namespace Tavaan\Engine\Mail\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Mail\Mailer;
use Tavaan\Engine\Mail\MailerServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور Mailer.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class MailerTest extends TestCase
{
    private Mailer $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new Mailer($config);
    }

    /**
     * T-01: MIME builder: multipart + attachment
     */
    public function test_t01_mime_builder_multipart__attach(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: Header encoding فارسی (RFC 2047)
     */
    public function test_t02_header_encoding__rfc_2047(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: SMTP با Mock server (array transport)
     */
    public function test_t03_smtp__mock_server_array_tran(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: `Mail::fake()` + assertSent
     */
    public function test_t04_mailfake__assert_sent(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: Queue mail
     */
    public function test_t05_queue_mail(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: Header injection → رد
     */
    public function test_t06_header_injection__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: STARTTLS handshake
     */
    public function test_t07_starttls_handshake(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

}