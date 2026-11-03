<?php

declare(strict_types=1);

namespace Tavaan\Engine\Mail;

/**
 * Mailable — کلاس پایه برای ایمیل‌های قابل ساخت.
 *
 * @see docs/03-engines/mail.md
 */
abstract class Mailable
{
    protected ?string $subject = null;
    protected ?string $view = null;
    /** @var array<string, mixed> */
    protected array $viewData = [];
    /** @var list<string> */
    protected array $to = [];
    protected ?string $from = null;
    /** @var list<array{path: string, name: string, mime: string}> */
    protected array $attachments = [];

    abstract public function build(): self;

    public function subject(string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function view(string $view, array $data = []): self
    {
        $this->view = $view;
        $this->viewData = $data;
        return $this;
    }

    public function to(string $email): self
    {
        $this->to[] = $email;
        return $this;
    }

    public function from(string $email): self
    {
        $this->from = $email;
        return $this;
    }

    public function attach(string $path, ?string $name = null, string $mime = 'application/octet-stream'): self
    {
        $this->attachments[] = ['path' => $path, 'name' => $name ?? \basename($path), 'mime' => $mime];
        return $this;
    }

    public function getSubject(): ?string { return $this->subject; }
    public function getView(): ?string { return $this->view; }
    public function getViewData(): array { return $this->viewData; }
    /** @return list<string> */
    public function getTo(): array { return $this->to; }
    public function getFrom(): ?string { return $this->from; }
    public function getAttachments(): array { return $this->attachments; }

    public function toMessage(): Message
    {
        $this->build();
        $msg = new Message();
        if ($this->subject !== null) $msg->subject($this->subject);
        if ($this->from !== null) $msg->from($this->from);
        foreach ($this->to as $email) $msg->to($email);
        foreach ($this->attachments as $a) $msg->attach($a['path'], $a['name'], $a['mime']);
        if ($this->view !== null) {
            $msg->html("<!-- View: {$this->view} -->");
        }
        return $msg;
    }

    public function queue(/* ... */): mixed
    {
        return null;
    }
    public function replyTo(/* ... */): mixed
    {
        return null;
    }
    public function send(/* ... */): mixed
    {
        return null;
    }
    public function with(/* ... */): mixed
    {
        return null;
    }
}
