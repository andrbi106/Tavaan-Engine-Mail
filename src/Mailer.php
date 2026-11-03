<?php

declare(strict_types=1);

namespace Tavaan\Engine\Mail;

final class Mailer
{
    public function to(/* ... */): mixed
    {
        return null;
    }
    public function cc(/* ... */): mixed
    {
        return null;
    }
    public function bcc(/* ... */): mixed
    {
        return null;
    }
    public function send(/* ... */): mixed
    {
        if (!headers_sent()) { http_response_code($this->status); foreach ($this->headers->all() as $name => $value) { $h = str_replace(" ", "-", ucwords(str_replace("-", " ", $name))); header("{$h}: {$value}"); } } echo $this->getContent();
    }
    public function queue(/* ... */): mixed
    {
        return null;
    }
    public function later(/* ... */): mixed
    {
        return null;
    }
    public function raw(/* ... */): mixed
    {
        return null;
    }
    public function fake(/* ... */): mixed
    {
        return null;
    }
    public function assertSent(/* ... */): mixed
    {
        $this->assertTrue(count($this->sent) > 0);
    }
}
