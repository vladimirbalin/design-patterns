<?php


class SaveCommand implements ICommand
{

    private $receiver;

    public function __construct($receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->save();
    }
}