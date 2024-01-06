<?php

// Classe abstraite de modèle
abstract class AbstractModel {

    protected string $table;

    public function __construct(
        protected DatabaseConnection $connector
    ) {}

    public function findAll(): void {
        echo 'action on table '.$this->table . PHP_EOL;
        $this->connector->query('Find all');
    }

    public function findByPk($primaryKey) : void  {
        echo 'action on table '.$this->table . PHP_EOL;
        $this->connector->query('Find PK : '.$primaryKey);
    }

    public function create($data) : void  {
        echo 'action on table '.$this->table . PHP_EOL;
        $this->connector->query('Create : '.$data);
    }

    public function update($primaryKey, $data) : void {
        echo 'action on table '.$this->table . PHP_EOL;
        $this->connector->query('Update PK : '.$primaryKey . ' data : '.$data);
    }

    public function delete($primaryKey): void {
        echo 'action on table '.$this->table . PHP_EOL;
        $this->connector->query('Delete PK : '.$primaryKey);
    }
}