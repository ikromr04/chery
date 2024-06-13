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

  public function tiggo8promax()
  {
    return view('pages.models.tiggo.tiggo8promax');
  }

  public function tiggo8promaxt()
  {
    return view('pages.models.tiggo.tiggo8promaxt');
  }

  public function tiggo8()
  {
    return view('pages.models.tiggo.tiggo8');
  }

  public function tiggo7pro()
  {
    return view('pages.models.tiggo.tiggo7pro');
  }

  public function tiggo7promax()
  {
    return view('pages.models.tiggo.tiggo7promax');
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

  public function arrizo8()
  {
    return view('pages.models.arrizo.arrizo8');
  }

  public function newEnergy()
  {
    return view('pages.models.new-energy.index');
  }

  public function autopilot()
  {
    return view('pages.autopilot');
  }

  public function news()
  {
    return view('pages.news.news');
  }

  public function newsRead()
  {
    return view('pages.news.read');
  }

  public function events()
  {
    return view('pages.news.events');
  }

  public function fromceo()
  {
    return view('pages.about.fromceo');
  }

  public function introduction()
  {
    return view('pages.about.introduction');
  }

  public function honors()
  {
    return view('pages.about.honor');
  }

  public function contact()
  {
    return view('pages.contact');
  }

  public function worldwide()
  {
    return view('pages.worldwide');
  }
}
