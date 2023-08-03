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

        $even = Person::get()->filter(function($item)
        {
            return $item->id % 2 == 0;
        });

        $map = $even->map(function($item, $key){
            return $item->id . ':' . $item->name;
        });

        $data = [
            'msg' => $map,
            'data' => $even,
        ];

        return view('hello.index', $data);

    }
}
