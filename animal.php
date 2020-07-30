<?php

class Animal
{
    public $name, $legs, $cold_blooded;

    //kumpulan methods
    public function get_name($name)
    {
        return $this->name = $name;
    }

    public function get_legs($legs)
    {
        return $this->legs = $legs;
    }

    public function get_cold_blooded($cold_blooded)
    {
        return $this->cold_blooded = $cold_blooded;
    }
}
