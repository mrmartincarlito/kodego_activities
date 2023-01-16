<?php
include_once ("config.php");
include_once ("constants.php");


/**
 * Actual restful functions
 */

 //GET All information
 if (isset($_GET['index']))
 {
    $sqlCommand = "SELECT * FROM `employees`;";

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

 //Get only 1 information
 if (isset($_GET['show']))
 {
    $id = $_GET['id'];
    
    $sqlCommand = "SELECT * FROM `employees` where ID = $id;";

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

 //Saving records
if (isset($_POST['store']))
{
    $data = json_decode($_POST['store']);

    $sqlCommand = "
    INSERT INTO `employees`
        (
            `first_name`, 
            `last_name`, 
            `department_id`, 
            `salary`, 
            `middle_name`
        ) 
    VALUES 
        (
            '{$data->first_name}',
            '{$data->last_name}',
            '{$data->department}',
            '{$data->salary}',
            '{$data->middle_name}')
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
        $response["description"] = "Successfully Saved New Employee";
    }

    echo json_encode($response);
}

//For deleting
if (isset($_POST['destroy']))
{
    $id = $_POST['id'];

    $sqlCommand = "
    DELETE FROM employees
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

if (isset($_POST['update']))
{
    $id = $_POST['id'];
    $data = json_decode($_POST['update']);

    $sqlCommand = "
    UPDATE `employees`
    SET `first_name`='{$data->first_name}',
    `department_id`='{$data->department}',
    `salary`='{$data->salary}'
    WHERE id = {$data->id}
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
 /**
  * End actual
  */





