<?php

// Scalar types:
// - boolean
// - integer
// - float/double
// - string
  
// Compound types:
// - array
// - object
// - callable
// - iterable

// Special types:
// - resource
// - NULL
  
// Pseudo types:
// - mixed
// - number
// - callback/callable
// - array|object
// - void

// To check return value use var_dump() function.
// To check type use gettype() function.
// To return type use is_type() functions (i.e is_int(), is_bool, etc).

    var_dump((bool) "");           // false
    var_dump((bool) 0.00);         // false
    var_dump((bool) NULL);         // false
    var_dump((bool) 1);            // true
    var_dump((bool) -2);           // true
    var_dump((bool) "foo");        // true
    var_dump(0 == 'all');          // true
    var_dump((string)0 == 'all');  // false
    var_dump((bool) array(12));    // true
    var_dump((bool) array());      // false

?>
