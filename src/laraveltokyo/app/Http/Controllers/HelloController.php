<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Person;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{

    private $fname;
    public function index(Request $request)
    {
        $msg = 'please input text:';
        if ($request->isMethod('post')) {
            $msg = 'you typed: "' . $request->input('msg') . '"';
        }
        $data = [
            'msg' => $msg,
        ];

        return view('hello.index', $data);
    }

    public function other(Request $request)
    { }
}
