<?php


interface IPizzaIngredientsFactory
{
    public function createCheese(): ICheese;

    public function createSauce(): ISauce;

    public function createDough(): IDough;

    public function createVeggies(): IVegetables;

    public function createPepperoni(): IPepperoni;

    public function createSeaFood(): ISeafood;
}