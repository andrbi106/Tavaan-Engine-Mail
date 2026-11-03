<?php

declare(strict_types=1);

namespace Tavaan\Engine\Mail;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Mailer — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Mail\Contracts\MailerInterface
 */
final class Mailer implements Contracts\MailerInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function to(/* ... */): mixed
    {
        // TODO: پیاده‌سازی to مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function cc(/* ... */): mixed
    {
        // TODO: پیاده‌سازی cc مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function bcc(/* ... */): mixed
    {
        // TODO: پیاده‌سازی bcc مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function send(/* ... */): mixed
    {
        // TODO: پیاده‌سازی send مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function queue(/* ... */): mixed
    {
        // TODO: پیاده‌سازی queue مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function later(/* ... */): mixed
    {
        // TODO: پیاده‌سازی later مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function raw(/* ... */): mixed
    {
        // TODO: پیاده‌سازی raw مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function fake(/* ... */): mixed
    {
        // TODO: پیاده‌سازی fake مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function assertSent(/* ... */): mixed
    {
        // TODO: پیاده‌سازی assertSent مطابق مستندات (سند §3 API).
        return null;
    }
}