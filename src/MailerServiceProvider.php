<?php

declare(strict_types=1);

namespace Tavaan\Engine\Mail;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Mail\Contracts\MailerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * MailerServiceProvider — ثبت سرویس‌های موتور Mailer.
 */
final class MailerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(MailerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Mailer($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('mailer', $this->app->get(MailerInterface::class));

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            MailerInterface::class,
            'mailer',
        ];
    }
}