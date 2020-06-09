<!doctype html>
<html>
<head>
	<style>
.topnav {
  overflow: hidden;
  background-color:rgba(255,255,255,0.5);
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
  font-weight: bold;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
  background-color: rgb(182, 144, 108);
  color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
	ul {
  list-style-type: none; /* Remove bullets */
  padding: 0; /* Remove padding */
  margin: 0; /* Remove margins */
}

ul li {
  border: 1px solid #ddd; /* Add a thin border to each list item */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Add a grey background color */
  padding: 12px; /* Add some padding */
}
		ul a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
	body {
		background-image: url("coffeetable.jpg");
  }
  .Title{
    text-align: center;
    font-size: 60px;
    background-color: rgba(182,144,108,0.3);

  }
  .container{
    position: relative;
    text-align: center;
    border: 30px;
    background-color: rgba(255,255,255,0.5);
  }
  button {
    background-color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
    font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    font-size: 15px;
    border-radius: 12px;
  }
  input[type="text"]{
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  p{
    font-weight: bold;
    font-size: 20px;
  }
	</style>
<meta charset="utf-8">
<title>Main Page</title>
</head>
<body>
	<h1 class = "Title"><b>Document Management System</b></h1>
	<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="Documents.php">Documents</a>
  <a href="Pending.php">Pending for Release</a>
  <a href="session.php">Logout</a>
</div>
<div class="container">
<?php
  require_once "config.php";
  session_start();
  $holder = $_SESSION['AccNum'];
  $docnum = $_GET['trackd'];
  $query = "SELECT * FROM `docs` WHERE `DocNum` = '".$docnum."' AND `Holder` = '".$holder."'";
  if($is_query_run = mysqli_query($conn,$query)){
    while($query_execute=mysqli_fetch_assoc($is_query_run)){
                $name= $query_execute['DocName'];
                $num=$query_execute['DocNum'];
                $remarks=$query_execute['Remarks'];
                $author=$query_execute['Author'];
    }
}else{
    echo'error';
}
echo '
    <h2>'.$name.'</h2>
    <p>
		Document Number: '.$num.'
    <br>Author: '.$author.'
    <br>Remarks: '.$remarks.'
	</p>

    ';
?>
    
    <form action="MainPge.php" method="post">
		<input type="submit" value="Back">
	</form>
</div>
</body>
</html>
