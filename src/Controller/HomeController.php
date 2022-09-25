<?php

namespace App\Controller;

use App\Model\Person;
use App\Services\CalculationService;

class HomeController extends Controller
{
    public function index()
    {
        if (request('persons')) {
            $this->store();
        }

        return $this->view('home');
    }

    public function store()
    {
        $villagers = [];

        foreach (request('persons') as $person) {
            $villager = new Person($person['age_of_death'], $person['year_od_death']);
            
            array_push($villagers, $villager->getBornOnYear());
        }

        $avarage = (new CalculationService)->average($villagers);

        $_SESSION["success"]               = "success";
        $_SESSION["person1-age_of_death"]  = request('persons')[0]['age_of_death'];
        $_SESSION["person1-year_od_death"] = request('persons')[0]['year_od_death'];
        $_SESSION["person2-age_of_death"]  = request('persons')[1]['age_of_death'];
        $_SESSION["person2-year_od_death"] = request('persons')[1]['year_od_death'];
        $_SESSION["average"]               = $avarage;

        return redirect('/');
    }
}