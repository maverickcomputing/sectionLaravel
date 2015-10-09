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
    $title        = "Example 2";
    $name         = "Super Bad Guys, LLC";
    $street       = "1 Fortress of EVIL place";
    $addressLine2 = "Cambridge, MA 02453";
    $phone        = "555-555-1234";

    // return the view, with the above data
    return View('example1')
      ->with('title', $title)
      ->with('companyName', $name)
      ->with('streetAddress', $street)
      ->with('stateTownAndZip', $addressLine2)
      ->with('phone', $phone);
  }


}
