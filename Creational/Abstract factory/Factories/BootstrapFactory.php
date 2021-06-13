<?php


class BootstrapFactory implements AbstractGuiFactory
{

    public function makeButton(): Button
    {
        return new BootstrapButtonClass();
    }

    public function makeCheckbox(): Checkbox
    {
        return new BootstrapCheckboxClass();
    }
}