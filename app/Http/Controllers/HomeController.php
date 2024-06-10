<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function dashboard(){

        return view('dashboard');
    }


    public function index(){

        $data = User::get();

        return view('home', compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
       // dd($request->all());
       $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'nama'  => 'required',
            'password' => 'required',

       ]);

       if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
    }
}
