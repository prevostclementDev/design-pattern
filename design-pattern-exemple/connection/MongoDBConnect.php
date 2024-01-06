<?php

// Implémentation de l'interface pour MongoDB
class MongoDBConnect implements DatabaseConnection {
    public function connect() {
        // Logique de connexion à MongoDB
        echo "Connected to MongoDB\n";
    }

    public function query($query) {
        // Logique d'exécution de la requête MongoDB
        echo "Executing MongoDB query: $query\n";
    }
}
