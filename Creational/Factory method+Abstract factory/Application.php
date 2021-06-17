<?php


class Application
{
    public function createStore()
    {
        switch (config('city')) {
            case 'New York':
                return new NYPizzaStore();
            case 'Chicago':
                return new CHPizzaStore();
        }
    }



    public function resolve()
    {
        $store = $this->createStore();
        $store->orderPizza('cheese');
    }
}