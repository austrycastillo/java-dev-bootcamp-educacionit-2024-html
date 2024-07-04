<?php
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$mensaje ="
    <h1>datos recibidos</h1>
    <b>Nombre:</b>".$nombre."<br>
    <b>Email:</b>".$email."<br>
    Saludos
";
if(mail("austry.castillo@educacionit.com","contacto desde la web",$mensaje))
    echo "contacto enviado correctamente 😎";
else
    echo "error 😥";

