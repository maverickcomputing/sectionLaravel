<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormController extends Controller
{

  public function getCreate() {
    return View('form');
  }

  public function postCreate(Request $request) {

    return View('form')
      ->with('request', $request);


//    echo $request->input('firstname');
//    echo "<br>";
//    echo $request->input('lastname');
  }

}
