<?php

/**
 * This is to load environment
 */
include_once ("config.php");
include_once ("constants.php");

//@TODO Change table name 
define("TABLE_NAME", "items");

/**
 * This code is for selecting all informations 
 */
if (isset($_GET['index']))
{
    //@TODO conditions to display all
    $sqlCommand = "SELECT * FROM " . TABLE_NAME;

    $results = $connection->query($sqlCommand);

    $response = array();

    $records = array();

    while ($row = $results->fetch_assoc()) {
        array_push($records, $row);
    }

    $response["code"] = SUCCESS;
    $response["total_rows"] = $results->num_rows;
    $response["records"] = $records;
    
    echo json_encode($response);
}

/**
 * This code is for selecting one information only
 */
if (isset($_GET['show']))
{
   $id = $_GET['id'];
   
   //@TODO conditions to display a specific
   $sqlCommand = "SELECT * FROM " . TABLE_NAME . " WHERE id = $id";

    $results = $connection->query($sqlCommand);

    $response = array();

    $records = array();

    while ($row = $results->fetch_assoc()) {
        array_push($records, $row);
    }

    $response["code"] = SUCCESS;
    $response["total_rows"] = $results->num_rows;
    $response["records"] = $records;
    
    echo json_encode($response);
}

/**
 * This code is for creating new resource
 */
if (isset($_POST['store']))
{

    $data = json_decode($_POST['store']);

    //@TODO conditions before saving
    //@TODO change columns and values
    $sqlCommand = "
    INSERT INTO " .TABLE_NAME. "
        (
            `item_description`, 
            `price`
        ) 
    VALUES 
        (
            '{$data->item_description}',
            '{$data->price}'
        )
    ";

    $isInserted = $connection->query($sqlCommand);

    $response = array();

    if ($isInserted)
    {
        $response["code"] = SUCCESS;
        $response["description"] = "Successfully Saved New Employee";
    } else 
    {
        $response["code"] = SERVER_ERROR; 
        $response["description"] = "Error while saving";
    }

    echo json_encode($response);
}

/**
 *  For Deleteing
 */
if (isset($_POST['destroy']))
{
    $id = $_POST['id'];

    $sqlCommand = "
    DELETE FROM " .TABLE_NAME. "
    WHERE id = $id
    ";

    $isInserted = $connection->query($sqlCommand);

    $response = array();

    if ($isInserted)
    {
        $response["code"] = SUCCESS;
        $response["description"] = "Successfully Delete Employee";
    } else 
    {
        $response["code"] = SERVER_ERROR; 
        $response["description"] = "Error while deleting employee";
    }

    echo json_encode($response);

}


/**
 * For Update
 */

 if (isset($_POST['update']))
 {
    $id = $_POST['id'];
    $data = json_decode($_POST['update']);

    //@TODO Add condition before updating
    //@TODO Change all columns and values before updatnig
    $sqlCommand = "
    UPDATE " .TABLE_NAME. "
    SET `item_description`='{$data->item_description}',
    price = '{$data->price}'
    WHERE id = $id
    ";

    $isInserted = $connection->query($sqlCommand);

    $response = array();

    if ($isInserted)
    {
        $response["code"] = SUCCESS;
        $response["description"] = "Successfully Updated Employee";
    } else 
    {
        $response["code"] = SERVER_ERROR; 
        $response["description"] = "Error while updating employee";
    }

    echo json_encode($response);
 }

