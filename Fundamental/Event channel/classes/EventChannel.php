<?php
include_once __DIR__.'/../interfaces/EventChannelInterface.php';
include_once __DIR__.'/../interfaces/SubscriberInterface.php';
include_once __DIR__.'/../interfaces/PublisherInterface.php';

class EventChannel implements EventChannelInterface
{
    private array $topics = [];

    public function subscribe($topicType, $subscriber)
    {
        $this->topics[$topicType][] = $subscriber;
        $msg = "{$subscriber->getName()} подписан(-а) на [{$topicType}]";

//        \Debugbar::debug($msg);
    }

    public function publish($topicType, $newsContent): bool
    {
        if(empty($this->topics[$topicType])) return false;

        foreach ($this->topics[$topicType] as $subscriber){
            /** @var SubscriberInterface $subscriber */
            $subscriber->notify($newsContent);
        }
        return true;
    }
}