<?php

require_once('../classes/Postgres.php');
require_once('../classes/MongoAdapter.php');

$postgres = new Postgres();
$postgres->insert();

$mongo = new MongoAdapter(new Mongo());
$mongo->insert();
