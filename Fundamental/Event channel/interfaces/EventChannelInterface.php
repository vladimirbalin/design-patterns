<?php


interface EventChannelInterface
{
    public function subscribe($topicType, $subscriber);

    public function publish($topicType, $newsContent);
}