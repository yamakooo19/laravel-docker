<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class HelloController extends Controller
{
    function __construct()
    {
        config(['sample.message' => '新しいメッセージ！']);
    }
    public function index()
    {
        $sample_msg = config('sample.message');
        $sample_data = config('sample.data');
        $test = 'test';
        $data = [
            'msg' => $sample_msg,
            'data' => $sample_data,
            'test' => $test,
        ];
        return view('hello.index', $data);
    }

    public function other(Request $request)
    {
        return redirect()->route('sample');
    }
}
