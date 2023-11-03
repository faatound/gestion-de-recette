<?php
    try{
        // Souvent on identifie cet objet par la variable $conn ou $db
         $mysqlConnection = new PDO(
        'mysql:host=localhost;dbname=partage-de-recette;charset=utf8',
        'root', //username
        '' //password
                        );
    } catch (Exception $e) {
        echo "Error : " . $e->getMessage();
    }
?>