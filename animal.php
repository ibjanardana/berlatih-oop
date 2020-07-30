<?php

class Animal
{
    public $name, $legs, $cold_blooded;

    //kumpulan methods
    public function get_name($name)
    {
        echo "<br>";
        return $this->name = $name;
    }

    public function get_legs($legs)
    {
        echo "<br>";
        return $this->legs = $legs;
    }

    public function get_cold_blooded($cold_blooded)
    {
        echo "<br>";
        return $this->cold_blooded = $cold_blooded;
    }
}
