$_COOKIE
Cookie
Cookie is a small file that the server embeds on the user's computer. Each time the computer opens a webpage, the server will send a cookie to the computer. PHP contains setcookie function to create a cookie object to be sent to the client along with HTTP response.



Creating Cookies with PHP
A cookie can be created with the setcookie() function.

Syntax:

setcookie(name, value, expire, path, domain, secure, httponly);


Parameters
Name − Name of the cookie stored.
Value − This sets the value of the named variable.
Expiry − This specifes a future time in seconds since 00:00:00 GMT on 1st Jan 1970.
Path − Directories for which the cookie is valid.
Domain − Specifies the domain name in very large domains.
Security − 1 for HTTPS. Default 0 for regular HTTP.


Example:



<?php
$cookie_name = "username";
$cookie_value = "rohan";
//The setcookie() function must appear BEFORE the <html> tag.
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

</body>

</html>


Modifying a Cookie
To modify a cookie, just set the cookie again using the setcookie() function.



Example:

<?php
$cookie_name = "username";
$cookie_value = "aakash";
//The setcookie() function must appear BEFORE the <html> tag.
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>


</body>

</html>


Delete a Cookie
To delete a cookie, we need to use the setcookie() function with a date that has already expired.



Example:

<?php
// set the expiration date to one day ago
setcookie("username", "", time() - 86400);
?>
<html>

<body>

    <?php
    echo "Cookie 'user' is deleted.";
    ?>

</body>

</html>