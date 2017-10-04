<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 04-10-2017
 * Time: 11:02
 */

class city  {

    private $country;
    private $district;
    private $id;
    private $name;
    private $population;



    public function __construct($country, $district, $id, $name, $population ) {
        $this->country = $country;
        $this->district = $district;
        $this->id = $id;
        $this->name = $name;
        $this->population = $population;

    }

    public function getCountry() {
        return $this->country;
    }

    public function getDistrict() {
        return $this->district;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPopulation() {
        return $this->population;
    }

    public function __toString()
    {
        return sprintf("%s, %s, %s, %s, %s\n"
        ,$this->getCountry(),$this->getdistrict(), $this->getid(), $this->getname(), $this->getpopulation());

    }

}
