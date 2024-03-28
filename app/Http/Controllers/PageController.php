<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    return view('pages.index');
  }

  public function tiggo8pro()
  {
    return view('pages.cars.tiggo8pro');
  }
}
