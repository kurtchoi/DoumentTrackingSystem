<?php

require_once "config.php";

$uname = $_POST['Email'];
$pw = $_POST['Password'];

$sql = "SELECT CONCAT(`Last`,' ',`First`) AS `FullName` ,`AccNum` FROM `accountlist` WHERE `Username`=? AND `Password`=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $uname, $pw);

$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows == 0) {
    $message = "Incorrect Username and Password";
    echo "<script>
    alert('$message')
    window.location.replace('./index.html');
</script>";

} else {
    $stmt->bind_result($fullName, $accnum);
    $stmt->fetch();

    session_start();

    $_SESSION['nameLogin'] = $fullName;
    $_SESSION['AccNum'] = $accnum;
    //echo $_SESSION['AccNum'];
        header("Location: ./MainPge.php");


}
