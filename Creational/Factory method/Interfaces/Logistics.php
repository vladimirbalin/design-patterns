<?php


abstract class Logistics
{
    public function deliver()
    {
        $transport = $this->getTransport();
        $transport->deliver();
    }

    abstract function getTransport(): ITransport;
}