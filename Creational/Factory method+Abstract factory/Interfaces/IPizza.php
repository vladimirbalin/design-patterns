<?php


abstract class IPizza
{
    protected string $name;
    protected IDough $dough;
    protected ISauce $sauce;
    protected IVegetables $vegetables;
    protected ICheese $cheese;
    protected IPepperoni $pepperoni;
    protected ISeafood $clam;

    abstract public function prepare();

    abstract public function bake();

    abstract public function cut();

    abstract public function box();

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


}