<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesRenderController extends Controller
{
    public function getService(){
        return view('traceviews/services');
    } 
      public function getIndex(){
        return view('/welcome');
    }
    public function getTrack(){
        return view('traceviews/track');
    }
    public function getAbout(){
        return view('traceviews/portfolio');
    }
    public function getContact(){
        return view('traceviews/contact');
    }
    public function getAccount(){
        return view('traceviews/account');
    }
    public function getCondisread(){
        return view('traceviews/condisread');
    }
    public function getDryvanread(){
        return view('traceviews/dryvanread');
    }
    public function getFlatbedread(){
        return view('traceviews/flatbedread');
    }
    public function getFleetecfacread(){
        return view('traceviews/fleetecfacread');
    }
    public function getFleetmanread(){
        return view('traceviews/fleetmanread');
    }
    public function getGenhauread(){
        return view('traceviews/genhauread');
    }
    public function getHeahauread(){
        return view('traceviews/heahauread');
    }
    public function getPhdread(){
        return view('traceviews/phdread');
    }
    public function getRefrigeratedread(){
        return view('traceviews/refrigeratedread');
    }   
}
