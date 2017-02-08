<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

public function getIndex(){
  return view ('Pages\Welcome');
}

public function GetAbout(){
  return view ('Pages\aboutme');
}

public function GetContato(){

  return  view ('Pages\contato');
}

public function postContato(){}


}
