<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //
    function getData()
    {
        $response = Http::get('https://apichallenges.eviltester.com/simpleapi/docs/swagger');
        return $response;
    }
}
