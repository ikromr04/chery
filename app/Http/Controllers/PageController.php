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
    return view('pages.models.tiggo.tiggo8pro');
  }

  public function tiggo8()
  {
    return view('pages.models.tiggo.tiggo8');
  }

  public function tiggo7pro()
  {
    return view('pages.models.tiggo.tiggo7pro');
  }

  public function tiggo7()
  {
    return view('pages.models.tiggo.tiggo7');
  }

  public function newTiggo4()
  {
    return view('pages.models.tiggo.new-tiggo4');
  }

  public function tiggo2()
  {
    return view('pages.models.tiggo.tiggo2');
  }
}
