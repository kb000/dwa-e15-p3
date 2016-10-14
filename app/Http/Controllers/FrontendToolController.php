<?php

namespace Kb0\FrontendBuddy\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kb0\FrontendBuddy\UserStub;
use fzaninotto\faker as faker;

class FrontendToolController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $personFaker;

    function getRandomUserStubs($num) {
        $users = array($num);
        for ($i = 0; $i <= $num; $i++) {
            $u = new UserStub();
            $u->firstName = $this->personFaker->firstName();
            $u->lastName = $this->personFaker->lastName();
            $u->userName = "user".$i;
            $users[$i] =  $u;
        }
        return $users;
    }

    function index() {
        
        $user = $this->getRandomUserStubs(1)[0];
        $personFaker = new faker\en_US\Person();

        return view('FrontendTools.index')
            ->with('desc', "Empty user!")
            ->with('generatedUser', $user);
    }
}
