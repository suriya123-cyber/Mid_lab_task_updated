<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(Request $req){
    if($req->session()->has('username')){
        return view('sales.index' );
       }else{
           $req->session()->flash('msg','invalid request');
           return redirect('/login');
       }
}

}
