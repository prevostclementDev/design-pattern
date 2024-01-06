<?php

// Implémentation de l'interface pour MySQL
class MySQLConnect implements DatabaseConnection {
    public function connect() {
        // Logique de connexion à MySQL
        echo "Connected to MySQL\n";
    }

    public function query($query) {
        // Logique d'exécution de la requête MySQL
        echo "Executing MySQL query: $query\n";
    }
}
