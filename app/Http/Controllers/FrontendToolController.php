<?php

namespace Kb0\FrontendBuddy\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kb0\FrontendBuddy\UserStub;
use Kb0\FrontendBuddy\IpsumInstance;
use Faker\Factory as FakerFactory;
use Badcow\LoremIpsum\Generator as LoremIpsumGenerator;
use Identicon\Identicon;

class FrontendToolController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $faker;
    protected $imageGenerator;
    protected $ipsumGenerator;
    protected $locale;

    public function __construct() {
        $this->ipsumGenerator = new LoremIpsumGenerator();
        $this->imageGenerator = new Identicon();
        $this->locale = FakerFactory::DEFAULT_LOCALE;
        $this->faker = FakerFactory::create($this->locale);
    }

    function getRandomUserStubs($num) {
        $imageGen = &$this->imageGenerator;
        $fake = &$this->faker;
        $users = array($num);
        for ($i = 0; $i < $num; $i++) {
            $u = new UserStub();
            $u->firstName = $fake->firstName;
            $u->lastName = $fake->lastName;
            $u->postalCode =  $fake->postCode;
            $u->email = $fake->email;
            $u->locale = $this->locale or $fake->locale;
            $u->username = $fake->userName;
            $imageGenSlugText = $u->username . $u->firstName . $u->lastName . $u->postalCode;
            $u->photoUri = $imageGen->getImageDataUri($imageGenSlugText);
            $users[$i] =  $u;
        }
        return $users;
    }

    function getIpsum($num) {
        $ipsum = new IpsumInstance();
        $paragraphs = $this->ipsumGenerator->getParagraphs($num);
        foreach($paragraphs as $para) {
            $ipsum->addParagraph($para);
        }
        return $ipsum;
    }

    protected function getGeneratorInputParameters() {
        return array(
            'min' => 1,
            'max' => 16,
            'step' => 1,
            'initValue' => 4
        );
    }

    function index() {
        $user = $this->getRandomUserStubs(1)[0];
        $ipsum = $this->getIpsum(1);

        return $this->decorateView(
            view('FrontendTools.index')
            ->with('desc', "Random stuff!")
            ->with('generatedIpsum', $ipsum)
            ->with('generatedUser', $user));
    }

    protected function decorateView($view) {
        $formParams = $this->getGeneratorInputParameters();
        return $view->with('generatorInputs', $formParams);
    }
}
