<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>Истрахов</title>
</head>
<body>
<?php 
$database="mybd";
$user="root";
$password="";
$host='localhost';
$connection=mysqli_connect($host, $user, $password, $database);
if ($connection == false){
print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error()."<br/>");
die();
}
else {
}
?>