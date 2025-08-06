<?php
$usuario = $_POST["user"];
$contrasenia = $_POST["password"];

$ckuser = "Potrero";
$ckpass = "Backend";

if ($usuario == ($ckuser) && $contrasenia == $ckpass) {
  header("Location:index.php");
} else {
  header("Location:loginerror.html");
}






?>