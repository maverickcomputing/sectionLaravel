<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Example2Controller extends Controller
{
  /**
   * This function contains the same logic as Example 1,
   * only the logic is in the following function instead
   * of in the route.
   */
  public function showExample2() {


    // setup our data to pass to the view
    $title        = "Example 1";
    $name         = "Flying Rescue Kittens, LLC";
    $street       = "1 Fortress of Kittens place";
    $addressLine2 = "Waltham, MA 02453";
    $phone        = "555-555-5555";

    // return the view, with the above data
    return View('example1')
      ->with('title', $title)
      ->with('companyName', $name)
      ->with('streetAddress', $street)
      ->with('stateTownAndZip', $addressLine2)
      ->with('phone', $phone);
  }


}
