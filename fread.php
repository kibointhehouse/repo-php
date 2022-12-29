<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file</title>
</head>
<body>
    <h2>pembacaan file</h2>
    <?php
    $file='C:\\Teks.txt';
    if(file_exists($file))
    {
        $fo=fopen($file,"r");
        $isi=fread($fo,filesize("$file"));
        echo("isi dari file <b> $file </b> adalah <b>\"$isi");
        fclose($fo);
    }else
    {
        echo("file <b> $file </b> tidak ada !");
    }
    ?>

</body>
</html>