<?php


class Subscriber implements ISubscriberInterface
{
    private string $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($content)
    {
        $msg = "{$this->getName()} оповещается данными [{$content}]";
    }

    public function getName()
    {
        return $this->name;
    }
}