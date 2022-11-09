$GLOBALS
$GLOBALS is a superglobal variable, which is also an array that stores all the global scope variables and is used to access global variables from anywhere in the PHP program.

Example:



<?php
$x = 10;
$y = 11;


function add()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();
echo $z;
?>


Output:

21