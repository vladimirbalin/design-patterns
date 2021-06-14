<?php


class Application
{
    function getLogistic($deliveryType)
    {
        switch ($deliveryType) {
            case 'land':
                return new LandLogistic();
            case 'sea':
                return new SeaLogistic();
            default:
                throw new InvalidArgumentException("No such type");
        }
    }

    public function sendProduct()
    {
        $this->getLogistic('land')->deliver();
    }
}