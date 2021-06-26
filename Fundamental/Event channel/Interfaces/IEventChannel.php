<?php


interface IEventChannel
{
    public function subscribe($topicType, $subscriber);

    public function publish($topicType, $newsContent);
}