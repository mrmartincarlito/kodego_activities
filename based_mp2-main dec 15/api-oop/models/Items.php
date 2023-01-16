<?php

include_once ("../config.php");

/**
 * Always assume that this is your tables on the database
 * 
 */
class Items extends dbObject {
    protected $dbTable = "items"; //table name
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