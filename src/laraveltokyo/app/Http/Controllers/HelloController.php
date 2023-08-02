<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Person;
use Illuminate\Support\Facades\Storage;

use App\MyClasses\MyServiceInterface;
use App\Facades\MyService;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => $request->msg,
            'data' => $request->alldata,
        ];

        return view('hello.index',$data);

    }
}
