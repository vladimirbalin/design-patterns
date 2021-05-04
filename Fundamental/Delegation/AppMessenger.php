<?php


class AppMessenger
{
    private MessengerInterface $messenger;

    public function __construct()
    {
        $this->byEmail();
    }

    public function byEmail(): AppMessenger
    {
        $this->messenger = new EmailMessenger();
        return $this;
    }

    public function bySms(): AppMessenger
    {
        $this->messenger = new SmsMessenger();
        return $this;
    }

    public function setSender($value): void
    {
        $this->messenger->setSender($value);
    }

    public function setRecipient($value): void
    {
        $this->messenger->setRecipient($value);
    }

    public function setMessage($value): void
    {
        $this->messenger->setMessage($value);
    }

    public function send(): bool
    {
        return $this->messenger->send();
    }
}