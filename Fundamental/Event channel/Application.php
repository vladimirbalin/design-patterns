<?php


class Application
{
    public function run()
    {
        $newsChannel = new EventChannel();

        $highgardenGroupPublisher = new Publisher('highgarder event', $newsChannel);
        $winterfellNewsPublisher = new Publisher('winterfell event', $newsChannel);
        $winterfellTimesPublisher = new Publisher('winterfell event', $newsChannel);

        $sansaSubscriber = new Subscriber('Sansa Stark');
        $johnSubscriber = new Subscriber('John Snow');
        $aryaSubscriber = new Subscriber('Arya Stark');
        $serseyaSubscriber = new Subscriber('Serseya Lannister');

        $newsChannel->subscribe('winterfell event', $sansaSubscriber);
        $newsChannel->subscribe('highgarden event', $johnSubscriber);
        $newsChannel->subscribe('winterfell event', $johnSubscriber);
        $newsChannel->subscribe('winterfell event', $aryaSubscriber);
        $newsChannel->subscribe('highgarden event', $serseyaSubscriber);

        $highgardenGroupPublisher->publish('highgarden content 1');
        $winterfellNewsPublisher->publish('winterfell content 1');
        $winterfellTimesPublisher->publish('winterfell content 2');
    }
}