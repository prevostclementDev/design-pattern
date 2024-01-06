<?php

// Interface pour la connexion à la base de données
interface DatabaseConnection {
    public function connect();
    public function query($query);
}