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
  table{
    padding: 10px;
    border-collapse: collapse;
    width: 100%;
    border-radius: 7px;
}
th{
    padding: 10px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
#customers th {
    font-size: 20px;
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: rgb(155, 155, 155);
    color: #333;
  }
#customers td{
    text-align: center;
    font-family: 'Courier New', Courier, monospace;
    padding-top: 12px;
    padding-bottom: 12px;
}
#customers tr:nth-child(even){
    background-color: rgba(155, 155, 155, 0.4);
    font-weight: bold;
}
	</style>
<meta charset="utf-8">
<title>Main Page</title>
</head>
<body>
  
	<h1 class = "Title"><b>Document Management System</b></h1>
	<div class="topnav">
  <a href="MainPge.php">Home</a>
  <a href="Documents.php">Documents</a>
  <a class="active" href="Pending.php">Pending for Release</a>
  <a href="session.php">Logout</a>
</div>
<div class="container">
    <table id="customers">
    <th>Document Number</th>
    <th>Requestee</th>
<?php 
    require_once "config.php";
    session_start();
    $accnum = $_SESSION['AccNum'];
    
    $query  = "SELECT * FROM `request` WHERE `Holder` = '".$accnum."'";
    $result = $conn->query($query);
    
    while ($row = $result->fetch_assoc()) {
        //echo "  To delete user   <b>" . $row['firstname'] . "</b>  Click on the number <input type='submit' name='delete' value='" . $row['id'] . "' /><br/>";
        //echo "<table>";
        echo "<tr><td>" . $row["DocNum"] . "</td><td>" . $row["Requester"]. "";
        
    }
    echo "</table>";
    
  ?>
</div>
</body>
</html>
