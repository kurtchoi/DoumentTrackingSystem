<?php

require_once "config.php";
session_start();
$holder = $_SESSION['AccNum'];
$docnum = $_GET['released'];

$query = "SELECT * FROM `request` WHERE `DocNum` = '".$docnum."' AND `Holder` = '".$holder."'";
  if($is_query_run = mysqli_query($conn,$query)){
    while($query_execute=mysqli_fetch_assoc($is_query_run)){
                $new= $query_execute['Requester'];
    }
  }
$sql = "UPDATE `docs` SET `Holder` = '".$new."' WHERE `DocNum` = '".$docnum."'  ";
        if (mysqli_query($conn, $sql)) {
            
          $redirect = "Location: ./MainPge.php";
            header($redirect);
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
