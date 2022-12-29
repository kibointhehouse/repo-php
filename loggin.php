<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php
    session_start();
    if(isset($HTTP_POST_VARS["insert"]))
    {
        if(($HTTP_POST_VARS["user"]!="")&&($HTTP_POST_VARS["password"]!=""))
        {
            $session_register("session stastus");
            $session_register("session user");
            $session_register("session password");
            $session_status="login";
            $session_user+$HTTP_POST_VARS["user"];
            $session_password=$HTTP_POST_VARS["password"];
            header("location: proses_loggin.php");
        }
        }?>
        <pre>
            <form action="loggin.php" method="post">
                user name : <input type="text" name="user" size="15">
                user password : <input type="password" name="password" size="15">
                                <input type="hidden" name="insert">
                                <input type="submit" name="loggin" value="loggin">


            </form>
        </pre>
</body>
</html>