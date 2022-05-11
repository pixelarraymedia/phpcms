<?php session_start(); 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Datasite CMS Login</title>
    <style>
        form{width:30%;
            margin:10% auto;
            outline: 1px solid #CC3333;
            padding: 10px;
        }
        ul{
            list-style: none;
        }
    </style>
</head>
<body>

<form action="login-handler.php" method="post">
    <ul>
        <li>User name</li>
        <li><input type="text" name="uname" ></li>
        <li>Password</li>
        <li><input type="password" name="upass" ></li>
        <li>&nbsp;</li>
        <li><input type="submit" value="Login" ></li>
    </ul>
</form>


</body>
</html>