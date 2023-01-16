<?php
include_once ("../models/Services.php");
include_once("../controller/ServiceController.php");

/**
 * Eto yung connected kay AJAX or Jquery
 */
$serviceModel = new Services();
$serviceController = new ServiceController($serviceModel);

/**
 * This code is for selecting all informations 
 */
if (isset($_GET['index']))
{
    $data = array();
    $values = $serviceController->index();
    $data['records'] = $values ? $values : [];
    echo parseResponse(SUCCESS, "Successful", null, $data);
}

/**
 * This code is for selecting one information only
 */
if (isset($_GET['show']))
{
   $id = $_GET['id'];
   
   $data['records'] = $serviceController->show($id);

   echo parseResponse(SUCCESS, "Successful", null, $data);
}

/**
 * This code is for creating new resource
 */
if (isset($_POST['store']))
{
    $data = json_decode($_POST['store']);

    $service = new Services();
    $service->name = $data->name;
    $service->price = $data->price;

    $id = $serviceController->store($service);

    echo $id ? parseResponse(SUCCESS, "Succesfully Inserted", $id) : parseResponse(SERVER_ERROR, "Insert failed");
    
}

/**
 *  For Deleteing
 */
if (isset($_POST['destroy']))
{
    $id = $_POST['id'];

    $serviceController->destroy($id);

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


    $newValue = $serviceController->update($id, $columns);

    echo $id ? parseResponse(SUCCESS, "Succesfully Updated", $id) : parseResponse(SERVER_ERROR, "Update failed");
}

if (isset($_GET['compute']))
{
    $serviceController->computeServicePrice($qty, $price);
}