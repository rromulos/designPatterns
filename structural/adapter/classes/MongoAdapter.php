<?php

require_once('../interfaces/DatabaseAdapterInterface.php');
require_once('../classes/Mongo.php');

class MongoAdapter implements DatabaseAdapterInterface
{
    private $mongo;

    public function __construct(Mongo $mongo)
    {
        $this->mongo = $mongo;
    }

    public function insert ()
    {
        $this->mongo->insertMongo();
    }

    public function update ()
    {
        $this->mongo->updateMongo();
    }

    public function delete ()
    {
        $this->mongo->deleteMongo();
    }
}