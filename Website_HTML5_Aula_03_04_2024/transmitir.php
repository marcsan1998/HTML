<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];

        if ($email == 'tiago@gmail.com'){
        echo("E MESMO O CAMARADA");
        }else{
        echo ("login incorreto")
        }
    } 

?>