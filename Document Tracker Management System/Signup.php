<html>
    <head>
        <title>Sign Up Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            p{
                font-weight: bold;
                font-size: 20px;
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
        <div class="container">
            <form action="Register.php" method="post">  
                <p>Enter the required informations below</p>
                <p>Username:<input type="text" name="suserName" required=""/></p>
                <p>Password:<input type="password" name="suserPass" required/></p>
                <p>Confirm Password:<input name="password_confirm" required="required" type="password" id="password_confirm" oninput="check(this)" />
                    <script language='javascript' type='text/javascript'>
                        function check(input) {
                            if (input.value != document.getElementById('password').value) {
                                input.setCustomValidity('Password Must be Matching.');
                            } else {
                                // input is valid -- reset the error message
                                input.setCustomValidity('');
                            }
                        }
                    </script>
                    </p>
                <p>First Name<input type="text" name="first" required></p>
                <p>Last Name<input type="text" name="last" required></p>
                <button type="submit" value="Sign Up"/>Sign Up</button>  
            </form>  
        </div>
    </body>
</html>