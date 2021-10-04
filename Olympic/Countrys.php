<?php
include_once 'Country.php';

class Countrys
{
    public $arr = [];

    public function __construct()
    {
    }

    public function push($data)
    {
        array_push($this->arr, $data);
    }

    public function Add($name, $totalGoldMedals)
    {
        $add = new Country($name, $totalGoldMedals);
        $this->push($add);
    }

    public function Sort()
    {
        while (true) {
            $count = 0;
            for ($i = 0; $i < count($this->arr) - 1; $i++) {
                if ($this->arr[$i]->totalGoldMedals < $this->arr[$i + 1]->totalGoldMedals) {
                    $ior = $this->arr[$i];
                    $this->arr[$i] = $this->arr[$i + 1];
                    $this->arr[$i + 1] = $ior;
                    $count++;
                }
            }
            if ($count == 0) {
                $this->toString();
                break;
            }

        }
    }
    protected function toString()
    {
        for ($i=0;$i<count($this->arr);$i++){
            echo 'St '.($i+1).': ';
            $this->arr[$i]->readData();
        }
    }
}