<?php

require_once "config.php";
session_start();
$author = $_SESSION['nameLogin'];
$holder = $_SESSION['AccNum'];
$docnum = $_GET['DocNum'];
$docname = $_GET['DocName'];
$remarks = $_GET['Remarks'];
//echo $docnum;
//echo '<br>'.$docname;
//echo '<br>'.$remarks;

$sql = "INSERT INTO `docs` (`DocNum`,`DocName`,`Author`, `Remarks`,`Holder`) VALUES ('".$docnum."','".$docname."','" . $author . "','" . $remarks . "','" . $holder . "') ";
        if (mysqli_query($conn, $sql)) {
            
          $redirect = "Location: ./MainPge.php";
            header($redirect);
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
