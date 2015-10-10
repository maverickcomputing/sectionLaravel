<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Example3Controller extends Controller
{
  /**
   *
   * Outputs a list of routes available in this controller
   * via reflection
   *
   * This function will be run if the user visits: /example3
   *
   */
  public function getIndex() {

    // ignore this. This is just a fancy way to get all of the
    // public methods of this class
    $className = 'App\Http\Controllers\Example3Controller';
    $reflector = new \ReflectionClass($className);
    $methodNames = array();
    $lowerClassName = strtolower($className);
    foreach ($reflector->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
      if (strtolower($method->class) == $lowerClassName) {
        $methodNames[] = strtolower(str_replace('get', '', $method->name));
      }
    }



    return View('example3Index')
      ->with('routes', $methodNames);
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
    $title        = "Example address";
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
   *
   * We will be using exampleWithListArray.blade.php, and we will be passing in
   * two variables-- an array of address data, and an array of list data.
   */
  public function getList() {

    // instead of constantly copy/pasting the logic to build the address information
    // into each function, we can use a helper function to do it for us each time
    // we need it. You can see the function below this one. All it does is
    // execute our same logic and return the data in an array.
    // We'll pass this into our view when the time comes.
    $addressData = self::generateAddress();

    // we'll build our listData right here. A good exercise would be to
    // take this logic and put it in it's own function, similar to how
    // generateAddress() works.
    $listData = array();

    // we'll use array_push to add some elements to our array
    // array_push is a simple way to add elements to an array in
    // an indexed fashion (not key-value pairs).
    array_push($listData,'cats');
    array_push($listData,'dogs');
    array_push($listData,'ferrets');
    array_push($listData,'elephants');
    array_push($listData,'skunks');


    // return the view, passing in $addressData and $listData
    return View('exampleWithListArray')
      ->with('addressData', $addressData)
      ->with('listData', $listData);

  }

  /**
   *
   * Sometimes it's nice to break things up into smaller functions.
   * With getAddress(), we were forced to return a view after we built our
   * address data. This private helper function will allow us to build
   * our address information without outputting a view. We can take the
   * return value of this function and pass it to a view as we please.
   *
   * @return array the address data
   */
  private function generateAddress() {
    // establish our variables
    $title        = "Example";
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

    return $addressData;
  }
}
