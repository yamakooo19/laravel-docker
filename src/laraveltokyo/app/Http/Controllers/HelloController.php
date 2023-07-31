<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class HelloController extends Controller
{
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
}
