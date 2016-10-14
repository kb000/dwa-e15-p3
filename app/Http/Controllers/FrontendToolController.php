<?php

namespace Kb0\FrontendBuddy\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kb0\FrontendBuddy\UserStub;

class FrontendToolController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index() {
        
        $user = new UserStub();

        return view('FrontendTools.index')
            ->with('desc', "Empty user!")
            ->with('generatedUser', $user);
    }
}
