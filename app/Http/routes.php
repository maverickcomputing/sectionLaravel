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
 * Example 1
 * An example of a route with simple logic that passes
 * data to a view before presentation.
 *
 * This is the most basic way to use a route and is largely discouraged
 * as it becomes cumbersome to maintain as your app grows in size.
 */
Route::get('/example1', function () {


  $name         = "Flying Rescue Kittens, LLC";
  $street       = "1 Fortress of Kittens place";
  $addressLine2 = "Waltham, MA 02453";
  $phone        = "555-555-5555";

  // return a view, passing in each variable to the view. Notice
  // how the first parameter of with() is the name of the variable
  // from inside the view, while the second parameter is the data you
  // with to pass in.

  // It's usually simpler to to keep the names consistent in the view and
  // in your PHP. I used different names here to make the distinction between
  // the two parameters clearer.
  return View('example1')
    ->with('title', 'Example 1')
    ->with('companyName', $name)
    ->with('streetAddress', $street)
    ->with('stateTownAndZip', $addressLine2)
    ->with('phone', $phone);

});


/**
 * Example 2
 * In this route, instead of having our logic in the route,
 * we're invoking a function in one of our controllers.
 *
 * In app/Http/Controllers there is a controller named "Example2Controller.php"
 * This route will invoke the "showExample2" function of said controller.
 *
 * This is preferred to having your logic in the route, but still means that
 * many entries will have to be made in the Routes.php file as your
 * application grows.
 */
Route::get('example2', 'Example2Controller@showExample2');



/**
 * Example 3
 *
 * This will route anything at /example/ to the associated function within
 * Example3Controller.php
 *
 * This is nice because instead of having an entry for every route related
 * to a given controller, you can dynamically generate them based on your
 * controller functions.
 *
 * The rest of the examples will be located inside Example3Controller.php.
 *
 */
Route::controller('example3', 'Example3Controller');



Route::get('/', function() {
  echo "Hello World";
});


Route::get('/form', function() {
  return View('form');
});


Route::post('/form/submitted', function() {
  print_r($_POST);
});
