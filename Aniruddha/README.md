Refrences:
- WikiBooks **-** [PHP Programming](https://en.wikibooks.org/wiki/PHP_Programming)
- [The Joy of PHP](http://www.joyofphp.com/) **-** [Alan Forbes](https://datenpdf.com/viewer/web/viewer.html?file=https%3A%2F%2Fdatenpdf.com%2FdownloadFile%2Fthe-joy-of-php-alan-forbes-html-element-php_pdf%3Fpreview%3D1#%5B%7B%22num%22%3A38%2C%22gen%22%3A0%7D%2C%7B%22name%22%3A%22XYZ%22%7D%2C36%2C807%2Cnull%5D)
- [Offical Documentation](http://php.net/docs.php) **-** [LICENCE](http://php.net/manual/en/cc.license.php) (*Copyright © 1997 - 2018 by the PHP Documentation Group.*)

# Introduction
**PHP** (originally stood for Personal Home Page, now stand Hypertext Preprocessor, a recursive acronym) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into **HTML**. Its syntax draws upon **C**, **Java**, and **Perl**. What distinguishes **PHP** from something like client-side **JavaScript** is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was.

There is a **PHP server**, which is a web server that is running <u>PHP software</u> on it. Let’s contrast a **PHP** server with a **plain server**, one that is not running PHP. A **plain web server** just takes request from a browser, locates the appropriate file, and sends it to the browser as is with no manipulation. In other words, it only serves static web pages. Once you add **PHP** to a web server, you get additional functionality—without taking any existing functionality away. The server can still continue to send static HTML files to the browser, but it can also manipulate the files prior to sending them to the browser.

A file that has been manipulated prior to being sent to the browser is referred to as **Dynamic Web Page**. And the word "*Preprocessor*" means that **PHP** makes changes before the HTML page is created. Basically, **PHP** allows a static webpage to become dynamic. Here is an example.

```html
<!DOCTYPE HTML>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>
      <p>
        Hello, World!, Today's date is <?php echo date(‘jS \o\f F Y’);?>.
      </p>
    </body>
</html>
```

A **PHP** file is just an HTML file saved using a `.php` extension instead of `.html`, which tells the server to look in the page for code.

Online interpreter that I can think of:
- http://phpfiddle.org/
- https://www.tutorialspoint.com/execute_php_online.php

### What PHP can do?
- Making Dynamic Web Applications.
    - Loads of extension and frameworks.
        - [Laravel](https://laravel.com/).
        - [Symfony](https://symfony.com/).
        - [CodeIgniter](https://www.codeigniter.com/).
- Server Side Scripting.
    - PHP Parser ([CGI or Server Module](http://www.hackingwithphp.com/18/6/0/php-as-a-cgi-or-a-module)).
        - https://github.com/nikic/PHP-Parser (PHP based parser).
        - https://www.npmjs.com/package/php-parser (JS based parser).
    - Web Server - Run the Web Server, with a connected PHP installation, which (PHP page) can be viewed through the server in a web browser.
- Command Line Scripting.
- Desktop GUI (you probably won't use it)
- Support wide range of Databases.

