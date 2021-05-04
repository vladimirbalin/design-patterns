<?php


interface MessengerInterface
{
    public function setSender($value): void;

    public function setRecipient($value): void;

    public function setMessage($value): void;

    public function send(): bool;

}