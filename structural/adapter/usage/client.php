<?php

/**
 * ADAPTER Design Pattern (GoF)
 * 
 * Converts the interface of one class to another that is expected by the client.
 * Allows classes that do not have a common interface to work together.
 * Gives the possibility of future implementations to the client by providing a public interface for adapters.
 */

require_once('../classes/Postgres.php');
require_once('../classes/MongoAdapter.php');

$postgres = new Postgres();
$postgres->insert();

$mongo = new MongoAdapter(new Mongo());
$mongo->insert();
