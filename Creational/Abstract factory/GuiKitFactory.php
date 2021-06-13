<?php


class GuiKitFactory
{
    private AbstractGuiFactory $factory;


    public function createGuiKit(string $type): AbstractGuiFactory
    {
        switch ($type) {
            case 'bootstrap':
                $this->factory = new BootstrapFactory();
                break;
            case 'tailwind':
                $this->factory = new TailwindFactory();
                break;
            default:
                throw new Exception('No such class found');
        }

        return $this->factory;
    }
}