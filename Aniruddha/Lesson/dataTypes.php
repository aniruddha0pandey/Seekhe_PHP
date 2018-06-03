<?php

// Scalar types:

// - boolean

    var_dump((bool) "");           // bool(false)
    var_dump((bool) 0.00);         // bool(false)
    var_dump((bool) NULL);         // bool(false)
    var_dump((bool) 1);            // bool(true)
    var_dump((bool) -2);           // bool(true)
    var_dump((bool) "foo");        // bool(true)
    var_dump(0 == 'all');          // bool(true)
    var_dump((string)0 == 'all');  // bool(false)
    var_dump((bool) array(12));    // bool(true)
    var_dump((bool) array());      // bool(false)

// - integer

    $var = 123;            // decimal
    $var = -123;           // negative
    $var = 0123;           // octal
    echo intval($var);     // 83 26
    $var = 0x1A;           // hexadecimal
    echo intval($var);     // 26
    $var = 0b11111111;     // binary
    echo intval($var);     // 255

    // Out of bound int will be displayed as float. Example for 32-bit
    var_dump(2147483647);   // int(2147483647)
    var_dump(50000000000);  // float(50000000000)

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
?>
