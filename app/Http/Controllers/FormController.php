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
    // form validation
    $this->validate($request, [
      'firstname' => 'required|min:2',
      'lastname'  => 'required|min:2',
      'animal'    => 'required|regex:[cats]'
    ]);

    return View('form')
      ->with('request', $request);


  }


}
