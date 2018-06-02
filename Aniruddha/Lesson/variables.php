<?php
    // In 'statically-typed' languages (i.e C/C++, Java), you must define the type of data that the variable will hold.
    // PHP, on the other hand, is 'dynamically-typed' and variables are case sensitive.
    // There is a difference b/w single-quote ('') and double-quote ("").

    // Using double-quotes would tell the PHP parser that there may be more than just a string going in and to look for additional instructions.
    $string1 = 'Hello, World!<br>';
    $string2 = "Aniruddha $string1";
    
    // Output: Aniruddha Hello, World!
    echo $string2;

    // or
    print $string2;

    // or
    printf("%s", $string2);
?>
