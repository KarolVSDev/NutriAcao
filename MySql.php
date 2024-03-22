<?php

class MySql {
    public static function conectar() {
        try {
            $pdo = new PDO("mysql:host=localhost; dbname=nutriacaoweb", "root", '');
            return $pdo;
        } catch(Exception $e) {
            echo "<h2>Erro</h2>";
        }
    }
}

?>
