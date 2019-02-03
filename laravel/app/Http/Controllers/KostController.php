<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KostController extends Controller
{
  public function index(){
    return view('page/home');
  }

  public function show($id){
    // return $id;
    return view('page/single', ['idKost' => $id]);
  }
}
