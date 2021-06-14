<?php


class SeaLogistic extends Logistics
{

    function getTransport(): ITransport
    {
        return new Ship();
    }
}