<?php


interface ISubscriberInterface
{
    public function notify($content);

    public function getName();
}