<?php


class Publisher implements PublisherInterface
{
    private EventChannelInterface $eventChannel;
    private string $topicType;

    public function __construct($topicType, $channel)
    {
        $this->eventChannel = $channel;
        $this->topicType = $topicType;
    }

    public function publish($content)
    {
        $this->eventChannel->publish($this->topicType, $content);
    }
}