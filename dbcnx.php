<?php
    try {
        $cnx = new PDO('mysql:host=localhost;dbname=foodorder', 'root', '');
    } catch (Exception $e) {
        echo 'Erreur: '.$e;
    }
