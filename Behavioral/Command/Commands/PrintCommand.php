<?php


class PrintCommand implements ICommand
{

    private $receiver;

    public function __construct($receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->print();
    }
}