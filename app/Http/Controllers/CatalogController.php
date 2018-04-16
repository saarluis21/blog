<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function show($id)
  {
    array

    return view("catalog.show", compact("id"));

  }
    public function create()
  {

    return view("catalog.create");

  }
  public function edit($id)
  {

  return view("catalog.edit", compact("id"));

  }
  public function index()
  {

  return view("catalog.index");

  }
}
