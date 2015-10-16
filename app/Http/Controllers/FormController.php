<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormController extends Controller
{

  /**
   * Basic index page when visiting /form
   *
   * @return string
   */
  public function getIndex() {
    return "Welcome to the Form index page. Try going to /form/create";
  }

  /**
   * This function presents the page with the form on it.
   *
   * This function is only run when a GET request is sent, such
   * as when a user goes visits your site with a browser.
   *
   * @return \Illuminate\View\View
   */
  public function getCreate() {
    return View('form');
  }

  /**
   *
   * This is the function that gets run when a POST request is
   * sent to /form/create. This function has access to the
   * POST data via the Request object that is being passed
   * in as a parameter.
   *
   * The request object is similar to $_GET and $_POST,
   * but it actually contains all the information of
   * $_GET, $_POST, and $_COOKIE (technically it will be the
   * data from $_GET or $_POST, not both).
   *
   * Notice that this function is also handling the validation.
   * One thing to note about the validation rules on
   * the 'animal' field actually allows any input that
   * contains the word "cats" in it (such as 'cats r dum'
   *
   * @param Request $request
   * @return \Illuminate\View\View
   */
  public function postCreate(Request $request) {
    // form validation
    $this->validate($request, [
      'firstname' => 'required|min:2',
      'lastname'  => 'required|min:2',
      'animal'    => 'required|regex:[cats]'
    ]);
    // return the 'form' view, passing in the data that
    // was submitted by the user. This is used in the view
    // to repopulate the input fields with the user's past
    // selection.
    return View('form')
      ->with('request', $request);
  }

}
