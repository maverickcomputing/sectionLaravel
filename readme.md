## Laravel PHP Framework Examples

This is a basic laravel install with a few routes, controllers and views. Clone this repository down and follow the steps used for setting up foobooks. This readme will point you to the various examples. Further explanation can be found in the comments in the examples.

Don't forget to run composer, to copy .env.example to .env, and to run php artisan key:generate

### Example 1

Location: /example1

This example starts in Routes.php on line 22:
```Route::get('/example1', function() { ... }```

This example uses the following files:
  • Routes.php
  • example1.blade.php
  
  
### Example 2

Location: /example2

This example starts in Routes.php on line 60:
```Route::get('example2', [ ... ```

This example uses the following files:
• Routes.php
• Example2Controller.php
• example1.blade.php

### Example 3

Example 3 has a few parts, but they're all within the Example3Controller.php file. The use of implicit controller routing allows us to have only one entry in Routes.php, and have multiple endpoints based on our functions inside Example3Controller.php

All of these examples start in Routes.php on line 79.

### Index page example
Location: /example

Primary Function: getIndex() in Example3Controller.php

This just outputs that you're using Example3Controller.php. Nothing Fancy happening here.

### Address data passing example
Location: /example/address

This example uses the following files:
• Routes.php
• Example3Controller.php
• exampleWithArray.blade.php

See the comments for public function getAddress() for more information.

### List data passing example
Location: /example/list

This example uses the following files:
• Routes.php
• Example3Controller.php
• exampleWithListArray.blade.php

See the comments for public function getList() for more information.

