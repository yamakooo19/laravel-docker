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
        $this->fname = 'hello.txt';
    }
    public function index()
    {
        $dir = '/';
        $all = Storage::disk('logs')->allfiles($dir);

        $data = [
            'msg' => 'DIR: ' . $dir,
            'data' => $all
        ];

        return view('hello.index', $data);
    }

    public function other(Request $request)
    {
        $ext = '.' . $request->file('file')->extension();
        Storage::disk('public')->putFileAs('files', $request->file('file'), 'uploaded' . $ext);

        return redirect()->route('hello');
    }
}
