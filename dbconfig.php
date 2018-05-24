<?php

     $host = "localhost"; //IP do servidor (localhost para servidor local)
     $db_name = "bd_leds"; //Nome do banco de dados a ser utilizado
     $username = "root"; //Seu usuário do BD
     $password = ""; //Sua senha do BD
     $conn;

        $conn = null;
        try {
            $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

?>