<?php

class CalculateFipe
{
    public function __construct(
        private Vehicle $vehicle,
        private float $depreciation = 5
    )
    {

    }

    protected function calculateDepreciation():float
    {
        $year = (int)date('Y');
        $deprecatedYears = $year - $this->vehicle->getMadeYear();

       return (($this->depreciation * $this->vehicle->getPrice()) * $deprecatedYears) / 100;
    }

    public function fipe():float
    {
        return $this->vehicle->getPrice() - $this->calculateDepreciation();
    }
}