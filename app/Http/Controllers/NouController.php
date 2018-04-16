<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NouController extends Controller
{
    public function index()
  {
    return 'Usuaris';
  }

  public function greetings($usuari)
{


  $records = ["record1", "record2", "record3"];

  //dd($usuari);
  //es para debugar

  return view("greetings", compact("usuari"));

}
}
