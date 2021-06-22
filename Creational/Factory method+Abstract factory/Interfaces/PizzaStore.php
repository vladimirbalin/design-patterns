<?php


abstract class PizzaStore
{
    public function orderPizza($type)
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
    }

    abstract public function createPizzaIngredientsFactory(): IPizzaIngredientsFactory;

    abstract public function createPizza(string $type): IPizza;
}