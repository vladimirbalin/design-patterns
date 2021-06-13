<?php


class TailwindFactory implements AbstractGuiFactory
{

    public function makeButton(): Button
    {
        return new TailwindButtonClass();
    }

    public function makeCheckbox(): Checkbox
    {
        return new TailwindCheckboxClass();
    }
}