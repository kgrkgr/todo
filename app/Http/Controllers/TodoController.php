<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        return view('index',['txt' => 'Todo List']);
    }
    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
            'age' => 'required',
            'registered_at' => 'date|nullable',
        ];
        $this->validate($request,$validate_rule);
        return view('index',['txt' => '正しい入力です']);
    }
}
