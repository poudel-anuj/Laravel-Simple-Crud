<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestoController extends Controller
{
    //
    function index(){
        return view('home');
    }

    function list(){
        $data = Restaurant::all();
        return view('list',['data'=>$data]);
    }
    function add(Request $req){
        // return $req->input();
        $resto = new Restaurant;
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->address  = $req->input('address');
        $resto->save();
        $req->session()->flash('status','Restaurant entered sucessfully');
        return redirect('list');
    }

    function delete($id){
        Restaurant::find($id)->delete();
        session()->flash('status','Restaurant deleted sucessfully');
        return redirect('list');
    }
    function edit($id){
        $data = Restaurant::find($id);
         return view('edit',['data'=>$data]);
        
    }
    function update(Request $req){
        // return $req->input();
        $resto = new Restaurant;
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->address  = $req->input('address');
        $resto->save();
        $req->session()->flash('status','Restaurant updated sucessfully');
        return redirect('list');
    }
}