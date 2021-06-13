<?php


interface AbstractGuiFactory
{
    public function makeButton(): Button;

    public function makeCheckbox(): Checkbox;
}