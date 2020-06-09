<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{
    background-image: url("coffeetable.jpg");
  }
  .Title{
    text-align: center;
    font-size: 60px;
    background-color: rgba(182,144,108,0.3);

  }
  .subTitle{
    text-align: center;
    font-size: 30px;
  }
  .container{
    position: relative;
    text-align: center;
    border: 30px;
    background-color: rgba(255,255,255,0.5);
  }
  label{
    font-size: 20px;
  }
  input[type="text"],
  input[type="password"] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
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
</style>
</head>
<body>

  <h1 class="Title">Document Tracking System</h1>


<form action="./loginprocess.php" method="post">
<div class="container">
  <h2 class="subTitle">Login Form</h2>
  <br>
    <label for="uname" id="userText"><b>Username:</b></label>
    <p><input id="userBox" type="text"  name="Email" required></p>
    <br>
    <label for="psw" id="passText"><b>Password:</b></label>
    <p><input id="passBox" type="password"  name="Password" required></p>
    <br><br>
    <a href="Signup.php">Sign Up</a>
    <br><br>
    <button id="submitButton" type="submit">Log in</button>
    <label>
    
</div>
</form>

</body>
</html>
