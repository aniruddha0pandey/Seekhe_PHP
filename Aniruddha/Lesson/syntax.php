<?php
    // When PHP parses a file, it looks for opening and closing tags, which are '<?php ... ?>'
    // while everything outside these tags are ignored.
    // PHP is case sensitive and support C like syntax.
    # Also this shell-style comment.
    // The 'echo' statment sends whatever text follows.

    echo '<p>Hello, World!</p>';

    // To use the below explained short tags, 'short_open_tag' or 'asp_tags' (Default: 1)
    // can be configured in the 'php.ini' directive or initiating '--enable-short-tags' command.
?>

<!-- This ASP-like tag was discarded after PHP 7.0.0 -->
<%
    echo phpversion();
%>

<!-- This tag was discarded after PHP 7.0.0 -->
<script language="php">
    echo $_SERVER['HTTP_USER_AGENT'];
    // $_SERVER is a special reserved PHP variable that contains all web server information.
</script>
    
<!-- There is also a short-hand for <?php echo ... ?> or <% echo ... %> -->
<?=
    phpinfo();
?>
