<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$logcome = $_REQUEST["login"];
$passcome = $_REQUEST["password"];
if ($logcome == "admin" && $passcome == "superuser"){
    echo "You administator";
}
elseif ($logcome == "" || $passcome == ""){
    include_once "index.php";
    print("<p id='badmes'>WRITE ALL PLEASE!!</p>");
}
else {
    echo "You user";
}
?>
<script src="scr.js"></script>
</body>
</html>