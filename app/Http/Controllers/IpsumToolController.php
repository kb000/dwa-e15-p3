<?php

namespace Kb0\FrontendBuddy\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kb0\FrontendBuddy\UserStub;
use Kb0\FrontendBuddy\IpsumInstance;
use Faker\Factory as FakerFactory;
use Badcow\LoremIpsum\Generator as LoremIpsumGenerator;
use Identicon\Identicon;

class IpsumToolController extends FrontendToolController
{   
    function generate(Request $request) {

        $limits = $this->getGeneratorInputParameters();

        # Validate the request data
        # Rules from here: http://www.laravelbook.com/laravel-input-validation/#laravel-validation-rules
        $this->validate($request, [
            'count' => 'required|integer|min:'.$limits['min'].'|max:'.$limits['max']
        ]);

        $num = $request->input('count');

        $ipsum = $this->getIpsum($num);

        return $this->decorateView(
            view('ipsum.index')
            ->with('desc', "Random Ipsum text!")
            ->with('generatedIpsum', $ipsum));;
    }
}
