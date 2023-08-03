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

        $result = Person::get()->filter(function($person){
            return $person->age < 50;
        });

        $result2 = Person::get()->filter(function($person){
            return $person->age < 20;
        });

        $result3 = $result->diff($result2);

        $data = [
            'msg' => $msg,
            'data' => $result3,
        ];

        return view('hello.index', $data);

    }
}
