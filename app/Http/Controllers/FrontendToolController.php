<?php

namespace Kb0\FrontendBuddy\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kb0\FrontendBuddy\UserStub;
use Faker\Factory as FakerFactory;
use Identicon\Identicon;

class FrontendToolController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $faker;
    protected $imageGenerator;
    protected $locale;

    function getRandomUserStubs($num) {
        $imageGen = &$this->imageGenerator;
        $fake = &$this->faker;
        $users = array($num);
        for ($i = 0; $i <= $num; $i++) {
            $u = new UserStub();
            $u->firstName = $fake->firstName;
            $u->lastName = $fake->lastName;
            $u->postalCode =  $fake->postCode;
            $u->email = $fake->email;
            $u->locale = $this->locale or $fake->locale;
            $u->username = $fake->userName;
            // TODO: Generate or choose an avatar?
            // TODO: Dynamically resize?
            $imageGenSlugText = $u->username . $u->firstName . $u->lastName . $u->postalCode;
            $u->photoUri = $imageGen->getImageDataUri($imageGenSlugText);
            $users[$i] =  $u;
        }
        return $users;
    }

    function index() {
        
        $this->imageGenerator = new Identicon();
        $this->locale = FakerFactory::DEFAULT_LOCALE;
        $this->faker = FakerFactory::create($this->locale);
        $user = $this->getRandomUserStubs(1)[0];


        return view('FrontendTools.index')
            ->with('desc', "Random user!")
            ->with('generatedUser', $user);
    }
}
