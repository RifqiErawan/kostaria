<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
  public function getIndex(){
    return view('page.home');
  }
  // public function getAbout(){
  //   // return "About";
  // }
  // public function getContact(){
  //   // return "Contact";
  // }
  //
  // public function show($id){
  //   // return $id;
  //   return view('page.single', ['idKost' => $id]);
  // }
}
