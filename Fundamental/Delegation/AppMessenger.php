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

    public function setSender($value): MessengerInterface
    {
        $this->messenger->setSender($value);
        return $this->messenger;
    }

    public function setRecipient($value): MessengerInterface
    {
        $this->messenger->setRecipient($value);
        return $this->messenger;
    }

    public function setMessage($value): MessengerInterface
    {
        $this->messenger->setMessage($value);
        return $this->messenger;
    }
}