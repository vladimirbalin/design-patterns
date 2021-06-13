<?php


class CreationalPatternsController
{
    private GuiKitFactory $guiKitFactory;

    public function __construct(GuiKitFactory $factory)
    {
        $this->guiKitFactory = $factory;
    }

    public function AbstractFactory()
    {
        $guiKit = $this->guiKitFactory->createGuiKit('bootstrap');
        $result[] = $guiKit->makeButton()->draw();
        $result[] = $guiKit->makeCheckbox()->draw();

        return view('abstract_factory', compact('result'));
    }
}