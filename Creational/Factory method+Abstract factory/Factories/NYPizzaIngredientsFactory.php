<?php


class NYPizzaIngredientsFactory implements IPizzaIngredientsFactory
{

    public function createCheese(): ICheese
    {
        return new ReggianoCheese();
    }

    public function createSauce(): ISauce
    {
        return new MarinaraSauce();
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
        return new FreshClams();
    }
}