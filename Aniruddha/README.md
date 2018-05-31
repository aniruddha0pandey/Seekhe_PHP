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

### What PHP can do?
- Making Dynamic Web Applications.
    - Loads of extension and frameworks.
        - [Laravel](https://laravel.com/).
        - [Symfony](https://symfony.com/).
        - [CodeIgniter](https://www.codeigniter.com/).
        - [Zend Framework](https://framework.zend.com/).
- Server Side Scripting.
    - Run the Web Server, with a connected PHP installation, which (PHP page) can be viewed through the server in a web browser.
- Command Line Scripting.
    - PHP Parser ([CGI or Server Module](http://www.hackingwithphp.com/18/6/0/php-as-a-cgi-or-a-module)).
        - https://github.com/nikic/PHP-Parser (PHP based parser).
        - https://www.npmjs.com/package/php-parser (JS based parser).
- Desktop GUI (you probably won't use it)
    - Using [PHP-GTK](http://www.php-gtk.com.br/home), toolkit to GIMP-[GTK](https://www.gtk.org/).
    - [ZZEE PHP GUI](http://www.zzee.com/php-gui/).
- Support wide range of Databases.
    - [Oracle OCI8](www.oracle.com/technetwork/database/features/oci/index-090945.html) which allows [PL/SQL](https://docs.oracle.com/cd/B25329_01/doc/appdev.102/b25108/xedev_php.htm#BCEFGBCI) queries (my fav 😍).
    - Required suitable Abstraction Layers and extensions/APIs.
    - These are all based on *PDO* (PHP Data Object) extension defines a lightweight, consistent interface for accessing databases in PHP which provides a data-access abstraction layer, means, regardless of the database you're using, same functions to issue queries and fetch data will be executed. Where database-specific *PDO* drivers should be selected, i.e for Oracle *PDO_OCI* other than *MOD_PHP* for Apache. Some are:
        - [PEAR](http://pear.php.net/package/MDB2) (probably dead) (why is it here then?) (कुछ सवालों के जवाब नहीं होते ||).
        - Good Luck for those **LAMP**(Linux Apache MySQL PHP) people out there.
        - For Windows [WAMP](http://www.wampserver.com/en/) way to go.

### Install Requirements
- [VC CRT 11](https://www.microsoft.com/en-us/download/details.aspx?id=30679) (Visual Studio 2012) for PHP5.6 and below.
- [VC CRT 14](https://www.microsoft.com/en-us/download/details.aspx?id=48145) (Visual Studio 2015) for PHP7.0 and above.
- With respective DLLs and x86 or x64 builds accordingly.
- If you're not getting in the mood for install fuss, there are interpreter available online, some I can think of are:
    - http://phpfiddle.org/
    - https://www.tutorialspoint.com/execute_php_online.php
- To save precious Bandwidth and develp locally. We need to:
    - Install a web server ([Apache](http://httpd.apache.org/), [Python](https://www.python.org/), etc), or as of PHP 5.4.0, the *CLI* *SAPI* provides a [built-in web server](http://php.net/manual/en/features.commandline.webserver.php) furthermore *Python Webserver* sends your PHP files to th browser or doesn't execute instead get downloads (weird) is likely because it is not configured or able to handle PHP files, it even lack MySQL support another solution write your own [PythonServer](https://gist.github.com/aniruddha0pandey/12713e556ac6cd221f6b1e35d2c48d79) for executing Dynamic Script (PHP) or use [CGIServer Script](https://gist.github.com/aniruddha0pandey/86674bafac26f786883dc35c29512ce0) maybe in future ⭐️.
    - Ofcourse [PHP](http://www.php.net/downloads.php).
    - We're most likely to install a database as well ([MySQL](http://dev.mysql.com/doc/), [Oracle](http://www.oracle.com/technetwork/database/database-technologies/express-edition/downloads/index.html), etc).
    - If you choose to go on the simpler route, then locate a pre-configure package, which automatically installs all mention above as **WAMP**.

### Prerequisite
Create a file named (i.e `example.php`) and put it in your web server's root directory (DOCUMENT_ROOT) (i.e C:\wamp\www?).

### Refrences:
- WikiBooks - [PHP Programming](https://en.wikibooks.org/wiki/PHP_Programming)
- [The Joy of PHP](http://www.joyofphp.com/) - [Alan Forbes](https://datenpdf.com/downloadFile/the-joy-of-php-alan-forbes-html-element-php_pdf)
- [Offical Documentation](http://php.net/docs.php) - [LICENCE](http://php.net/manual/en/cc.license.php) (*Copyright © 1997 - 2018 by the PHP Documentation Group.*)
