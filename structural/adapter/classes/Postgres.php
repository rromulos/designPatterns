<?php

require_once('../interfaces/DatabaseAdapterInterface.php');

class Postgres implements DatabaseAdapterInterface
{
    public function insert ()
    {
        echo "insert from Postgres ";
    }

    public function update ()
    {
        echo "update from Postgres ";
    }

    public function delete ()
    {
        echo "delete from Postgres ";
    }
}