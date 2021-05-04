<?php
include_once __DIR__.'/classes/EventChannel.php';
include_once __DIR__.'/classes/Publisher.php';
include_once __DIR__.'/classes/Subscriber.php';


class EventChannelJob
{
    public function run()
    {
        $newsChannel = new EventChannel();

        $highgardenGroup = new Publisher('highgarder event', $newsChannel);
        $winterfellNews = new Publisher('winterfell event', $newsChannel);
        $winterfellTimes = new Publisher('winterfell event', $newsChannel);

        $sansa = new Subscriber('Sansa Stark');
        $john = new Subscriber('John Snow');
        $arya = new Subscriber('Arya Stark');
        $serseya = new Subscriber('Serseya Lannister');

        $newsChannel->subscribe('winterfell event', $sansa);
        $newsChannel->subscribe('highgarden event', $john);
        $newsChannel->subscribe('winterfell event', $john);
        $newsChannel->subscribe('winterfell event', $arya);
        $newsChannel->subscribe('highgarden event', $serseya);

        $highgardenGroup->publish('highgarden content 1');
        $winterfellNews->publish('winterfell content 1');
        $winterfellTimes->publish('winterfell content 2');
    }
}