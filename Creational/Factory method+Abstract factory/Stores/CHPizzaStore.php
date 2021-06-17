<?php


class CHPizzaStore extends PizzaStore
{

    public function createPizza($type): IPizza
    {
        $ingredientsFactory = $this->createPizzaIngredientsFactory();
        switch ($type) {
            case "cheese":
                return new CheesePizza($ingredientsFactory);
            case "veggie":
                return new VeggiePizza($ingredientsFactory);
            case "clam":
                return new ClamPizza($ingredientsFactory);
            case "pepperoni":
                return new PepperoniPizza($ingredientsFactory);
            default:
                throw new \Exception('No such pizza found');
        }
    }

    public function createPizzaIngredientsFactory(): IPizzaIngredientsFactory
    {
        return new CHPizzaIngredientsFactory();
    }
}