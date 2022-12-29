<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(isset($HTTP_SESSION_VARS["insert"]))
    {
        echo("<pre>");
        echo("user name : <b>".$HTTP_SESSION_VARS["session user"]);
        echo("password : <b>". $HTTP_SESSION_VARS["session password"]);
        echo("click <a href=\"loggout.php" ">loggout</a> untuk keluar");
        echo("</pre>");
    }else
    {
        header("location: loggin.php");
        exit;
    }
    ?>
</body>
</html>