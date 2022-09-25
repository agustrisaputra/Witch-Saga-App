<?php

namespace App\Model;

class Person
{
    public function __construct(
        protected $ageOfDeath,
        protected $yearOfDeath
    )
    {}

    public function getAgeOfDeath()
    {
        return (int) $this->ageOfDeath;
    }

    public function getYearOfDeath()
    {
        return (int) $this->yearOfDeath;
    }

    public function getBornOnYear()
    {
        if ($this->getYearOfDeath() == null || $this->getAgeOfDeath() == null) return -1;

        return $this->getYearOfDeath() - $this->getAgeOfDeath();
    }
}