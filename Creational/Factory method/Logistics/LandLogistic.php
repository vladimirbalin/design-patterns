<?php


class LandLogistic extends Logistics
{

    function getTransport(): ITransport
    {
        return new Truck();
    }
}