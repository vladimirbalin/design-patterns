<?php


class App
{
    public function resolve()
    {
        $invoker = new Invoker();
        $receiver = new TextFileReceiver();
        $invoker->setOpenCommand(new OpenCommand($receiver));
        $invoker->setSaveCommand(new SaveCommand($receiver));
        $invoker->setPrintCommand(new PrintCommand($receiver));

        $invoker->run();
    }
}