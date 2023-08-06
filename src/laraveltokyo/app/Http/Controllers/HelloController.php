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

use \App\Jobs\MyJob;

use App\Events\PersonEvent;



class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'msg' => 'This is Vue.js application',
        ];

        return view('hello.index', $data);

    }

    public function send(Request $request)
    {
        $id = $request->input('id');
        $person = Person::find($id);

        event(new PersonEvent($person));
        $data = [
            'input' => '',
            'msg' => 'id='. $id,
            'data' => [$person],
        ];

        return view('hello.index',$data);
    }

    public function save($id, $name)
    {
        $record = Person::find($id);
        $record->name = $name;
        $record->save();
        return redirect()->route('hello');
    }

    public function other()
    {
        $person = new Person();
        $person->all_data = ['aaa','bbb@ccc',1234];
        $person->save();

        return redirect()->route('hello');
    }

    public function json($id = -1)
    {
        if($id == -1)
        {
            return Person::get()->toJson();
        }
        else
        {
            return Person::find($id)->toJson();
        }
    }
}
