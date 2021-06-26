<?php


class Invoker
{
    private ICommand $open;
    private ICommand $save;
    private ICommand $print;

    public function setOpenCommand(ICommand $open)
    {
        $this->open = $open;
    }

    public function setSaveCommand(ICommand $save)
    {
        $this->save = $save;
    }

    public function setPrintCommand(ICommand $print)
    {
        $this->print = $print;
    }

    public function run()
    {
        $this->open->execute();
        $this->print->execute();
        $this->save->execute();
    }
}