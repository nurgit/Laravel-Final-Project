<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorController extends Controller
{
  function index(){

    return view('tutor.index');
  }
}
