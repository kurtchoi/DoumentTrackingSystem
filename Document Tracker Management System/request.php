<?php

require_once "config.php";
session_start();
$requester = $_SESSION['AccNum'];
$docnum = $_GET['requestd'];

$query = "SELECT * FROM `docs` WHERE `DocNum` = '".$docnum."'";
  if($is_query_run = mysqli_query($conn,$query)){
    while($query_execute=mysqli_fetch_assoc($is_query_run)){
                $holder= $query_execute['Holder'];
    }
}

$sql = "INSERT INTO `request` (`DocNum`,`Holder`,`Requester`) VALUES ('".$docnum."','".$holder."','" . $requester . "') ";
        if (mysqli_query($conn, $sql)) {
            
          $redirect = "Location: ./MainPge.php";
            header($redirect);
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
