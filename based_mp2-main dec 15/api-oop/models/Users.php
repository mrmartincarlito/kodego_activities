<?php

include_once ("../config.php");

/**
 * Always assume that this is your tables on the database
 * 
 */
class Users extends dbObject {
    protected $dbTable = "users"; //table name
    protected $primaryKey = "id"; //primary key

    /**
     * Database fields
     *
     * @var array
     */
    protected $dbFields = array(
        "username" => array("text", "required"),
        "password" => array("text", "required")
    );
}