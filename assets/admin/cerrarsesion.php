<?php

require "../bd/login.php";

$_SESSION= [];

session_unset();

session_destroy();

header("location: ../../index.php");


?>