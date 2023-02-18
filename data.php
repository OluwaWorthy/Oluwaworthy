<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store form data in .txt file</title>
</head>
<body>
    <form method="post">
        Enter Your Text Here:<br>
        <input type="text" name="textdata"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html-->

<?php

if(isset($_POST['firstName', 'lastName', 'email', 'textarea']))
{
    $data=$_POST['firstName', 'lastName', 'email', 'textarea'];

    $fp = fopen('data.txt', 'a');

    fwrite($fp, $data);
    fclose($fp);
}
?>