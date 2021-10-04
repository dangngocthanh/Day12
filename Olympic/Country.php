<?php

class Country
{
    public $name;
    public $totalGoldMedals;

    /**
     * @param $name
     * @param $totalGoldMedals
     */
    public function __construct($name, $totalGoldMedals)
    {
        $this->name = $name;
        $this->totalGoldMedals = $totalGoldMedals;
    }

    public function readData(){
        echo 'Country: '.$this->name.' Number of gold medals: '.$this->totalGoldMedals.'<br>';
    }

}
