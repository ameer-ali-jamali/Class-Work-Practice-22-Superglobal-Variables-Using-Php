$_SESSION
A session is a way to store information to be used across multiple pages. Session variables store user information which can be used across multiple pages. Session variables last until the user closes the browser.



Starting a PHP Session
In PHP a session can be started with the session_start() function. Sessions variables are set with the $_SESSION variable. Let's assume we have one webpage called example1.php. On this page, we will start a new PHP session and set session variables.

example1.php

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // Set session variables
    $_SESSION["uname"] = "shayan";
    $_SESSION["upass"] = "hunter";
    echo "Session variables are set.";
    ?>

</body>

</html>


Get PHP Session Variable Values
Now we will create a new page named example2.php. Now from this page, we will access the session variables we have set on the first page (example1.php).

example2.php

<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // Echo session variables that were set on previous page
    echo "Favorite color is " . $_SESSION["uname"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["upass"] . ".";
    ?>

</body>

</html>
We can also see all the session variables by using print_r($_SESSION).

<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>
    <?php
    print_r($_SESSION);
    ?>
</body>

</html>


Modifying a Session Variable
To modify a session variable we just need to overwrite it.

Example:

<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // to change a session variable, just overwrite it
    $_SESSION["uname"] = "aakash";
    print_r($_SESSION);
    ?>

</body>


</html>


Destroying a PHP Session
To delete all the session variables and destroy the session, we can use session_unset() and session_destroy().

Example:

<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    ?>

</body>

</html>