<?php
echo '<h1>Gracias por su registro </h1>';
echo '<br>Cedula</br>';
    isset($_POST["cedula"]) ? print $_POST["cedula"] :"";
echo '<br>Nombre</br>';
    isset($_POST["nombre"]) ? print $_POST["nombre"] :"";
echo '<br>Email</br>';
    isset($_POST["email"]) ? print $_POST["email"] :""; 
echo '<br>Movil</br>';
    isset($_POST["movil"]) ? print $_POST["movil"] :""; ?>
