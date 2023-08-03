<?php

namespace App\Http\Controllers;

use App\Http\Pagination\MyPaginator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Person;
use Illuminate\Support\Facades\Storage;

use App\MyClasses\MyServiceInterface;
use App\Facades\MyService;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        $msg = 'show people record.';

        $keys = Person::get()->modelKeys();

        $even = array_filter($keys,function($key){
            return $key % 2 == 0;
        });

        $result = Person::get()->only($even);

        $data = [
            'msg' => $msg,
            'data' => $result,
        ];

        return view('hello.index', $data);

    }
}
