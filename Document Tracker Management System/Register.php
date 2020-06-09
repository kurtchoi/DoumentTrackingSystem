<?php

require_once "config.php";
$uname = $_POST['suserName'];
$pw = $_POST['suserPass'];
$first = $_POST['first'];
$last = $_POST['last'];
//echo $docnum;
//echo '<br>'.$docname;
//echo '<br>'.$remarks;

$sql = "INSERT INTO `accountlist` (`Username`,`Password`,`First`, `Last`) VALUES ('".$uname."','".$pw."','" . $first . "','" . $last . "') ";
        if (mysqli_query($conn, $sql)) {
            
          $redirect = "Location: ./index.php";
            header($redirect);
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
