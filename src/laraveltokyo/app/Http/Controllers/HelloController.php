<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Person;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{

    private $fname;
    public function index(Request $request, Response $response)
    {
        $name = $request->query('name');
        $mail = $request->query('mail');
        $tel = $request->query('tel');
        $msg = $request->query('msg');
        $keys = ['名前', 'メール', '電話'];
        $values = [$name, $mail, $tel];

        $data = [
            'msg' => $msg,
            'keys' => $keys,
            'values' => $values,
        ];

        $request->flash();
        return view('hello.index', $data);
    }

    public function other(Request $request)
    {
        $data = [
            'name' => 'Taro',
            'mail' => 'taro@yamada',
            'tel' => '090-999-999',
        ];
        $query_str = http_build_query($data);
        $data['msg'] = $query_str;
        return redirect()->route('hello', $data);
    }
}
