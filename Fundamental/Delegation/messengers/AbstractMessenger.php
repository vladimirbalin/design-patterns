<?php


abstract class AbstractMessenger implements MessengerInterface
{
    protected $sender;
    protected $recipient;
    protected $message;

    public function setSender($value): void
    {
        $this->sender = $value;
    }

    public function setRecipient($value): void
    {
        $this->recipient = $value;
    }

    public function setMessage($value): void
    {
        $this->message = $value;
    }

    public function send(): bool
    {
        return true;
    }
}