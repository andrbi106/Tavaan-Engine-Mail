<?php

declare(strict_types=1);

namespace Tavaan\Engine\Mail\Contracts;

/**
 * قرارداد Mailable.
 *
 * @see \Tavaan\Engine\Mail\Mailable
 * @api 1.0
 */
interface MailableInterface
{
    /**
     * متد build.
     *
     * @return mixed
     */
    public function build(/* ... */): mixed;

    /**
     * متد subject.
     *
     * @return mixed
     */
    public function subject(/* ... */): mixed;

    /**
     * متد view.
     *
     * @return mixed
     */
    public function view(/* ... */): mixed;

    /**
     * متد with.
     *
     * @return mixed
     */
    public function with(/* ... */): mixed;

    /**
     * متد attach.
     *
     * @return mixed
     */
    public function attach(/* ... */): mixed;

    /**
     * متد replyTo.
     *
     * @return mixed
     */
    public function replyTo(/* ... */): mixed;

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
}