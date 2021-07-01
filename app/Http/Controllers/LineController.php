<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineController extends Controller
{
    public function index(Request $request)
    {
        error_log($request['events'][0]['message']['text']);
        return response('ok','200');
    }
}
