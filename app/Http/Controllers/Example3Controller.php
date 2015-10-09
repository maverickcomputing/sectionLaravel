<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Example3Controller extends Controller
{
  /**
   * by using the implict controller routing, functions in the controller
   * can now be referenced function name in the URL.
   *
   * This function will be run if the user visits: /example3
   *
   */
  public function getIndex() {
    echo "This is the function getIndex() in Example3Controller";
  }

  /**
   * The following function can be accessed at: /example3/address
   * It uses the same view as Examples 1 and 2, but the logic is reworked
   * to simplify the passing of data to the view.
   *
   * Note the naming of the function: get[Function-name]
   */
  public function getAddress() {
    // establish our variables
    $title        = "Example 1";
    $name         = "Flying Rescue Kittens, LLC";
    $street       = "1 Fortress of Kittens place";
    $addressLine2 = "Waltham, MA 02453";
    $phone        = "555-555-5555";

    // create an empty array to hold our variables
    $addressData = array();

    // push each variable onto the array.
    // This is similar to array_push(), but it allows
    // you to push key-value pairs.
    $addressData['title'] = $title;
    $addressData['name'] = $name;
    $addressData['street'] = $street;
    $addressData['addressLine2'] = $addressLine2;
    $addressData['phone'] = $phone;

    // return the view, with the above data
    return View('exampleWithArray')
      ->with('addressData', $addressData);
  }

  /**
   * This function is an example of how to pass data in as an array,
   * and then loop through that data inside the view. This is very useful
   * for any sort of repeating data such as lists and tables.
   */
  public function getList() {

  }

}
