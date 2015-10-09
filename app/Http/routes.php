<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * An example of a route with simple logic that passes
 * data to a view before presentation.
 *
 *
 *
 */
Route::get('/example1', function () {

  //
  $name         = "Flying Rescue Kittens, LLC";
  $street       = "1 Fortress of Kittens place";
  $addressLine2 = "Waltham, MA 02453";
  $phone        = "555-555-5555";

  // return a view, passing in each variable to the view. Notice
  // how the first parameter of with() is the name of the variable
  // from inside the view, while the second parameter is the data you
  // with to pass in.

  // It's usually simplier to to keep the names consistent in the view and
  // in your PHP. I used different names here to make the distinction between
  // the two parameters clearer.
  return View('example1')
    ->with('title', 'Example 1')
    ->with('companyName', $name)
    ->with('streetAddress', $street)
    ->with('stateTownAndZip', $addressLine2)
    ->with('phone', $phone);

});
