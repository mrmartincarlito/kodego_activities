<?php

include_once ("../config.php");

/**
 * Always assume that this is your tables on the database
 * 
 */
class Services extends dbObject {
    protected $dbTable = "services"; //table name
    protected $primaryKey = "id"; //primary key

    /**
     * Database fields
     *
     * @var array
     */
    protected $dbFields = array(
        "name" => array("text", "required"),
        "price" => array("double", "required")
    );
}