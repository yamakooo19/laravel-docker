<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Person;
use Illuminate\Support\Facades\Storage;
use App\MyClasses\MyService;

class HelloController extends Controller
{
    public function index(int $id = -1)
    {
        $myservice = app()->makeWith('App\MyClasses\MyService',['id'=> $id]);
        $data = [
            'msg' => $myservice->say(),
            'data' => $myservice->alldata(),
        ];

        return view('hello.index', $data);

    }

    public function other(Request $request)
    {
    }
}
