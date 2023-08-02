<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Person;
use Illuminate\Support\Facades\Storage;

use App\MyClasses\MyServiceInterface;
use App\Facades\MyService;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index()
    {
        $data = ['msg' => '', 'data' => []];
        $msg = 'get: ';
        $result = [];
        DB::table('people')->orderBy('name','asc')->chunk(2,function($items) use (&$msg, &$result){
            foreach($items as $item)
            {
                $msg .= $item->id . ': ' . $item->name. ' ';
                $result += array_merge($result, [$item]);
                break;
            }
            return true;
        });

        $data = [
            'msg' => $msg,
            'data' => $result,
        ];

        return view('hello.index', $data);

    }
}
