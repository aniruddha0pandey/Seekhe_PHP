<?php
    // When PHP parses a file, it looks for opening and closing tags, which are '<?php ... ?>'.
    // Or the 'short_open_tag' (Default: 1) can be configured in the 'php.ini' directive.
    // Or by '--enable-short-tags' command.
    // PHP support C like syntax, hence the comments.
    // PHP is case sensitive.
    // The 'echo' statment sends whatever text follows.

    echo '<p>Hello, World!</p>';
    echo phpversion();
    echo phpinfo();
?>
