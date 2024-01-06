<?php

    require_once './connection/DatabaseConnection.php';
    require_once './connection/MongoDBConnect.php';
    require_once './connection/MySQLConnect.php';

    require_once './model/AbstractModel.php';
    require_once './model/SessionModel.php';
    require_once './model/UserModel.php';


// Méthode de connexion
$mysqlConnector = new MySQLConnect();
$mongoDBConnector = new MongoDBConnect();

// test méthode de connexion sur UserModel
$modelWithMySQL = new UserModel($mysqlConnector);
$modelWithMySQL->findAll();
$modelWithMySQL->create('donnée de test');

// test méthode de connexion sur session Modèle
$modelWithMongoDB = new SessionModel($mongoDBConnector);
$modelWithMongoDB->findByPk(1);
$modelWithMongoDB->update(1, 'donnée de test');
$modelWithMongoDB->delete(1);