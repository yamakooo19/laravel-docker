<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{

    private $fname;
    function __construct()
    {
        $this->fname = 'sample.txt';
    }
    public function index()
    {
        $sample_msg = $this->fname;
        $sample_data = Storage::get($this->fname);
        $data = [
            'msg' => $sample_msg,
            'data' => explode(PHP_EOL, $sample_data)
        ];
        return view('hello.index', $data);
    }

    public function other($msg)
    {
        // $data = Storage::get($this->fname) . PHP_EOL . $msg;
        // Storage::put($this->fname, $data);
        // return redirect()->route('hello');

        //上記と実装している処理は同じこと
        //ファイルの末尾に追加するStorage::appendの他に
        //ファイルの先頭に追加するStorage::prependがある。
        Storage::append($this->fname, $msg);
        return redirect()->route('hello');
    }
}
