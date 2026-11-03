<?php

declare(strict_types=1);

namespace Tavaan\Engine\Mail\Contracts;

/**
 * قرارداد Mailer.
 *
 * @see \Tavaan\Engine\Mail\Mailer
 * @api 1.0
 */
interface MailerInterface
{
    /**
     * متد to.
     *
     * @return mixed
     */
    public function to(/* ... */): mixed;

    /**
     * متد cc.
     *
     * @return mixed
     */
    public function cc(/* ... */): mixed;

    /**
     * متد bcc.
     *
     * @return mixed
     */
    public function bcc(/* ... */): mixed;

    /**
     * متد send.
     *
     * @return mixed
     */
    public function send(/* ... */): mixed;

    /**
     * متد queue.
     *
     * @return mixed
     */
    public function queue(/* ... */): mixed;

    /**
     * متد later.
     *
     * @return mixed
     */
    public function later(/* ... */): mixed;

    /**
     * متد raw.
     *
     * @return mixed
     */
    public function raw(/* ... */): mixed;

    /**
     * متد fake.
     *
     * @return mixed
     */
    public function fake(/* ... */): mixed;

    /**
     * متد assertSent.
     *
     * @return mixed
     */
    public function assertSent(/* ... */): mixed;
}