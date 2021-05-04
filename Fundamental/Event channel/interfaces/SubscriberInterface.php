<?php


interface SubscriberInterface
{
    public function notify($content);

    public function getName();
}