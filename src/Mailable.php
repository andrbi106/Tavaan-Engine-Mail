<?php

declare(strict_types=1);

namespace Tavaan\Engine\Mail;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Mailable — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Mail\Contracts\MailableInterface
 */
final class Mailable implements Contracts\MailableInterface
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
    public function build(/* ... */): mixed
    {
        // TODO: پیاده‌سازی build مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function subject(/* ... */): mixed
    {
        // TODO: پیاده‌سازی subject مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function view(/* ... */): mixed
    {
        // TODO: پیاده‌سازی view مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function with(/* ... */): mixed
    {
        // TODO: پیاده‌سازی with مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function attach(/* ... */): mixed
    {
        // TODO: پیاده‌سازی attach مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function replyTo(/* ... */): mixed
    {
        // TODO: پیاده‌سازی replyTo مطابق مستندات (سند §3 API).
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
}