<?php


abstract class Logistics
{
    public function deliver()
    {
        $transport = $this->getTransport();
        $transport->packProducts();
        $transport->deliver();
    }

    abstract function getTransport(): ITransport;
}