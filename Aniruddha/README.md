I'm taking refrence from:
- WikiBooks **-** [PHP Programming](https://en.wikibooks.org/wiki/PHP_Programming)
- [The Joy of PHP](http://www.joyofphp.com/) **-** [Alan Forbes](https://datenpdf.com/viewer/web/viewer.html?file=https%3A%2F%2Fdatenpdf.com%2FdownloadFile%2Fthe-joy-of-php-alan-forbes-html-element-php_pdf%3Fpreview%3D1#%5B%7B%22num%22%3A38%2C%22gen%22%3A0%7D%2C%7B%22name%22%3A%22XYZ%22%7D%2C36%2C807%2Cnull%5D)
- [Offical Documentation](http://php.net/docs.php) **-** [LICENCE](http://php.net/manual/en/cc.license.php) (*Copyright © 1997 - 2018 by the PHP Documentation Group.*)

# Introduction
PHP (originally stood for Personal Home Page, now stand Hypertext Preprocessor, a recursive acronym) is a widely-used Open Source general-purpose scripting language that is especially suited for web development and can be embedded into HTML. Its syntax draws upon C, Java, and Perl, what distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was.

Basically, PHP allows a static webpage to become dynamic. Here is an example.
```html
<!DOCTYPE HTML>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>
      <p>Hello, World!, Today's date is <?php echo date(‘jS \o\f F Y’);?>.</p>
    </body>
</html>
```
