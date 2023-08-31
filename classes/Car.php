<?php

class Car extends Vehicle
{
    protected ?int $wheels = 4;

    public function __construct(
        string $model,
        string $brand,
        string $madeYear,
    )
    {
        parent::__construct($model,$brand,$madeYear);
    }
}