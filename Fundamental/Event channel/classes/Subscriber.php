<?php


class Subscriber implements SubscriberInterface
{
    private string $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($content)
    {
        $msg = "{$this->getName()} оповещается данными [{$content}]";
        // \Debugbar::info($msg);
    }

    public function getName()
    {
        return $this->name;
    }
}