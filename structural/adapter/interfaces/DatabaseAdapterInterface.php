<?php

interface DatabaseAdapterInterface
{
    public function insert();
    public function update();
    public function delete();
}