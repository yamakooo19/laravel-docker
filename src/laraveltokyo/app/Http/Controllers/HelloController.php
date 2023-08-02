<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Person;
use Illuminate\Support\Facades\Storage;
use App\MyClasses\MyService;

class HelloController extends Controller
{
    public function index()
    {
        $myservice = app('App\MyClasses\MyService');
        $data = [
            'msg' => $myservice->say(),
            'data' => $myservice->data(),
        ];

        return view('hello.index', $data);

    }

    public function other(Request $request)
    {
    }
}
