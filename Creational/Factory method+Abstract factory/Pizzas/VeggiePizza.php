<?php


class VeggiePizza extends IPizza
{
    protected IPizzaIngredientsFactory $ingredientsFactory;

    public function __construct(IPizzaIngredientsFactory $ingredientsFactory)
    {
        $this->ingredientsFactory = $ingredientsFactory;
    }

    public function prepare()
    {
        $this->cheese = $this->ingredientsFactory->createCheese();
        $this->dough = $this->ingredientsFactory->createDough();
        $this->vegetables = $this->ingredientsFactory->createVeggies();
    }

    public function bake()
    {
        // TODO: Implement bake() method.
    }

    public function cut()
    {
        // TODO: Implement cut() method.
    }

    public function box()
    {
        // TODO: Implement box() method.
    }
}