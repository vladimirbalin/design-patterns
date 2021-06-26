<?php

class EventChannel implements IEventChannel
{
    private array $topics = [];

    public function subscribe($topicType, $subscriber)
    {
        $this->topics[$topicType][] = $subscriber;
        $msg = "{$subscriber->getName()} подписан(-а) на [{$topicType}]";
    }

    public function publish($topicType, $newsContent): bool
    {
        if(empty($this->topics[$topicType])) return false;

        foreach ($this->topics[$topicType] as $subscriber){
            /** @var ISubscriberInterface $subscriber */
            $subscriber->notify($newsContent);
        }
        return true;
    }
}