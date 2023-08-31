<?php

abstract class Vehicle
{
    protected ?int $wheels;
    protected string $model;
    protected string $brand;
    protected string $color;
    protected string $made_year;

    private array $actions = [];

    protected float $depreciation = 5;

    protected float $price;


    public function __construct(
        string $model,
        string $brand,
        string $madeYear,
    ) {
        $this->model = $model;
        $this->brand = $brand;
        $this->made_year = $madeYear;
    }

    public function getPrice():float
    {
        return $this->price;
    }

    public function getMadeYear():string
    {
        return $this->made_year;
    }


    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function shiftGear(string $gear): void
    {
        $this->actions[] = "Engatou a marcha $gear";

        echo "A marcha engatada foi {$gear}";
    }

    public function accelerate(): void
    {
        $this->actions[] = "O veículo acelerou";
        echo "O veículo acelerou";
    }

    public function getActions():array
    {
        return $this->actions;
    }
}
