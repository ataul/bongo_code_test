Bongo code test
================

#Solutions of tree problems are in following files:

problem1.php
problem2.php
problem3.php

These files can be run directly to view the output.

For unit testing PHPSpec library is used. In order to install the library following commands can be executed.

```
$ composer install
```

```
$ composer dump-autoload
```

```
$vendor\bin\phpspec run
```
Use forward or backslash depending on operating system. It should display like the following screenshot:

<img src="screenshot.png">

#Limitation:
In order to simultaneously run test cases for all three problems, "printDepth" function is renamed to "printDepth2" for problem2.
This limitation can easily be removed if only problem2 is used separately.

