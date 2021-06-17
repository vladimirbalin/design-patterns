<?php


class CHPizzaIngredientsFactory implements IPizzaIngredientsFactory
{

    public function createCheese(): ICheese
    {
        return new MozzarellaCheese();
    }

    public function createSauce(): ISauce
    {
        return new PlumTomatoSauce();
    }

    public function createDough(): IDough
    {
        return new ThinCrustDough();
    }

    public function createVeggies(): IVegetables
    {
        return new Vegetables();
    }

    public function createPepperoni(): IPepperoni
    {
        return new SlicedPepperoni();
    }

    public function createSeaFood(): ISeafood
    {
        return new FrozenClams();
    }
}