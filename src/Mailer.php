<?php

declare(strict_types=1);

namespace Tavaan\Engine\Mail;

final class Mailer
{
    public function to(string $path, array $params = [], bool $secure = null)
    {
        return null;
    }
    public function cc()
    {
        return null;
    }
    public function bcc()
    {
        return null;
    }
    public function send()
    {
        if (!headers_sent()) { http_response_code($this->status); foreach ($this->headers->all() as $name => $value) { header(str_replace(" ", "-", ucwords(str_replace("-", " ", $name))) . ": " . $value); } } echo $this->getContent();
    }: {$value}"); } } echo $this->getContent();
    }
    public function queue()
    {
        return null;
    }
    public function later()
    {
        return null;
    }
    public function raw()
    {
        return null;
    }
    public function fake()
    {
        return null;
    }
    public function assertSent()
    {
        return null;
    }
}
