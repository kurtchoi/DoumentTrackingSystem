<?php

session_start();
unset($_SESSION['nameLogin']);
unset($_SESSION['AccNum']);
header("Location: ./index.php");

?>