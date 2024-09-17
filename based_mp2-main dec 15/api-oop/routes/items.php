<?php
include_once ("../models/Items.php");
include_once("../controller/ItemsController.php");

/**
 * Eto yung connected kay AJAX or Jquery
 */
$itemsModel = new Items();
$itemsController = new ItemsController($itemsModel);

/**
 * This code is for selecting all informations 
 */
if (isset($_GET['index']))
{
    $data['records'] = $itemsController->index();
    echo parseResponse(SUCCESS, "Successful", null, $data);
}

/**
 * This code is for selecting one information only
 */
if (isset($_GET['show']))
{
   $id = $_GET['id'];
   
   $data['records'] = $itemsController->show($id);

   echo parseResponse(SUCCESS, "Successful", null, $data);
}

/**
 * This code is for creating new resource
 */
if (isset($_POST['store']))
{
    $data = json_decode($_POST['store']);

    /**
     * Need to be changes
     */
    $service = new Services();
    $service->name = $data->name;
    $service->description = $data->description;
    $service->price = $data->price;

    $id = $itemsController->store($service);

    echo $id ? parseResponse(SUCCESS, "Succesfully Inserted", $id) : parseResponse(SERVER_ERROR, "Insert failed");
    
}

/**
 *  For Deleteing
 */
if (isset($_POST['destroy']))
{
    $id = $_POST['id'];

    $itemsController->destroy($id);

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
        "name" => $data->name,
        "price" => $data->price
    );


    $newValue = $itemsController->update($id, $columns);

    echo $id ? parseResponse(SUCCESS, "Succesfully Updated", $id) : parseResponse(SERVER_ERROR, "Update failed");
}