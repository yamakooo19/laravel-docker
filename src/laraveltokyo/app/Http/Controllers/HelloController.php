<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Person;
use Illuminate\Support\Facades\Storage;
use App\MyClasses\MyService;

class HelloController extends Controller
{
    public function index(MyService $myservice, int $id = -1)
    {
        $myservice->setId($id);
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
