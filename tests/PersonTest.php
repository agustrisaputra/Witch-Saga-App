<?php

namespace Tests;

use App\Model\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testCreatePerson()
    {
        $person = new Person(10, 12);
        
        $this->assertEquals(10, $person->getAgeOfDeath());
        $this->assertEquals(12, $person->getYearOfDeath());
        $this->assertEquals(2, $person->getBornOnYear());
    }

    public function testCreatePerson2()
    {
        $person = new Person(13, 17);
        
        $this->assertEquals(13, $person->getAgeOfDeath());
        $this->assertEquals(17, $person->getYearOfDeath());
        $this->assertEquals(4, $person->getBornOnYear());
    }
}