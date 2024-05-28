<?php
session_start();
if(!isset($_SESSION['userid']))
{
    header('location:login.php');
}
    setcookie("abc","123", time() + 600,"/cms/" );
    
    if(isset($_COOKIE["abc"]))
        echo $_COOKIE["abc"];
    else
        echo "Not set";
?>


/*
setcookie(
    name,        // The name of the cookie.
    value,       // The value of the cookie.
    expires,     // The expiration time as a Unix timestamp.
    path,        // The path on the server where the cookie is available.
    domain,      // The domain that the cookie is available to.
    secure,      // Indicates if the cookie should only be sent over HTTPS.
    httponly     // Indicates if the cookie is accessible only through the HTTP protocol.
);
*/