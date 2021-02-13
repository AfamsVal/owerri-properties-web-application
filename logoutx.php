<?php
include 'backend/functions.php';

if(isset($_COOKIE['property_cookie_'])){
unset($_COOKIE['property_cookie_']);
setcookie('property_cookie_', '' , time() - 3600,'/');
}

session_destroy();

die(header("Location:login"));
?>