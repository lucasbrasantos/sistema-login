<?php

session_destroy();
$past = time() - 3600;
foreach ( $_COOKIE as $key => $value ){
    setcookie( $key, $value, $past, '/' );
}


Header('Location: ../public/index.php');







// ? >