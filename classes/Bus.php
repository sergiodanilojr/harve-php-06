<?php

class Bus extends Vehicle
{
    protected ?int $wheels = 8;

    protected function calculateDepreciation(): float
    {
        if($this->color == "white"){
            $this->depreciation -= 1; 
        }

        return parent::calculateDepreciation();
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }
}