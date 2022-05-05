<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 
 /**
   * Show the application welcome screen to the user.
   *
   * @return Response
   */
  public function index() {
    return view('welcome');
  }