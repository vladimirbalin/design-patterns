<?php


class Application
{

    public function createGuiKit(string $type): AbstractGuiFactory
    {
        switch ($type) {
            case 'bootstrap':
                $factory = new BootstrapFactory();
                break;
            case 'tailwind':
                $factory = new TailwindFactory();
                break;
            default:
                throw new Exception('No such class found');
        }

        return $factory;
    }

    public function AbstractFactory()
    {
        $guiKit = $this->createGuiKit('bootstrap');
        $guiKit->makeButton()->draw();
        $guiKit->makeCheckbox()->draw();
    }
}