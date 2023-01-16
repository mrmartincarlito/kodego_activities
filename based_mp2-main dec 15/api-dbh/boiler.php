<?php

include_once("config.php");
include_once ("constants.php");

//@var change table name
define("TABLE_NAME", "items");

/**
 * This code is for selecting all informations 
 */
if (isset($_GET['index']))
{

    $users = $database->get(TABLE_NAME);
    $data['records'] = $users;
    $data['total_rows'] = count($users);

    echo parseResponse(SUCCESS, "Successful", null, $data);
}

/**
 * This code is for selecting one information only
 */
if (isset($_GET['show']))
{
   $id = $_GET['id'];
   
   $database->where("id", $id);
   $users = $database->getOne(TABLE_NAME);
   $data['records'] = $users;

   echo parseResponse(SUCCESS, "Successful", null, $data);
}

/**
 * This code is for creating new resource
 */
if (isset($_POST['store']))
{
    $data = json_decode($_POST['store']);

    //@TODO
    //@var these are columns and values of the table
    $columns = array(
        "name" => $data->name,
        "description" => $data->description,
        "uom" => $data->uom,
        "price" => $data->price
    );

    $id = $database->insert(TABLE_NAME, $columns);

    echo $id ? parseResponse(SUCCESS, "Succesfully Inserted", $id) : parseResponse(SERVER_ERROR, "Insert failed");
    
}

/**
 *  For Deleteing
 */
if (isset($_POST['destroy']))
{
    $id = $_POST['id'];

    $database->where("id", $id);
    $isDeleted = $database->delete(TABLE_NAME);

    echo parseResponse(SUCCESS, "Succesfully Deleted");
}


/**
 * For Update
 */

if (isset($_POST['update']))
{
   $id = $_POST['id'];
   $data = json_decode($_POST['update']);

   //@TODO Change column variables
   //@var
   $columns = array(
        "description" => $data->description,
        "uom" => $data->uom,
        "price" => $data->price
    );

    $database->where("id", $id);
    $id = $database->update(TABLE_NAME, $columns);

    echo $id ? parseResponse(SUCCESS, "Succesfully Updated", $id) : parseResponse(SERVER_ERROR, "Update failed");
}