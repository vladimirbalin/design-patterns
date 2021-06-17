<?php


class ClamPizza extends IPizza
{
    private IPizzaIngredientsFactory $ingredientsFactory;

    public function __construct(IPizzaIngredientsFactory $ingredientsFactory)
    {
        $this->ingredientsFactory = $ingredientsFactory;
    }

    public function prepare()
    {
        $this->clam = $this->ingredientsFactory->createSeaFood();
        $this->dough = $this->ingredientsFactory->createDough();
        $this->pepperoni = $this->ingredientsFactory->createPepperoni();
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