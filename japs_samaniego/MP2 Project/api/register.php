<?php
include_once ("config.php");
include_once ("constants.php");

if (isset($_POST['store']))
{
    $data = json_decode($_POST['store']);

    $sqlCommand = "
    INSERT INTO `register`
        (
            `entry`, 
            `description`, 
            `name`,
            `id`, 
            `date`,
            `type`
        ) 
    VALUES 
        (
            '{$data->entry_number}',
            '{$data->description}',
            '{$data->party_name}',
            '{$data->id_presented}',
            '{$data->entry_date}',
            '{$data->type_act}')
    ";

    $isInserted = $connection->query($sqlCommand);

    $response = array();

    if ($isInserted)
    {
        $response["code"] = SUCCESS;
        $response["description"] = "Successful Entry";
    } else 
    {
        $response["code"] = SERVER_ERROR; 
        $response["description"] = "Successful Entry";
    }

    echo json_encode($response);
}

if (isset($_GET['index']))
{
   $sqlCommand = "SELECT * FROM `register`;";

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

if (isset($_POST['destroy']))
{
    $entry = $_POST['entry'];

    $sqlCommand = "
    DELETE FROM `register`
    WHERE entry = $entry
    ";

    $isInserted = $connection->query($sqlCommand);

    $response = array();

    if ($isInserted)
    {
        $response["code"] = SUCCESS;
        $response["description"] = "SUCCESSFULLY DELETED";
    } else 
    {
        $response["code"] = SERVER_ERROR; 
        $response["description"] = "ERROR WHILE DELETING";
    }

    echo json_encode($response);

}

if (isset($_POST['update']))
{
    $entry = $_POST['entry'];
    $data = json_decode($_POST['update']);

    $sqlCommand = "
    UPDATE `register`
    SET `entry`='{$data->entry_number}',
    `description`='{$data->description}', 
    `name`=''{$data->party_name}',
    `id`='{$data->id_presented}',
    `date`='{$data->entry_date}',
    `type`='{$data->type_act}')
    WHERE entry = {$data->entry}
    ";

    $isInserted = $connection->query($sqlCommand);

    $response = array();

    if ($isInserted)
    {
        $response["code"] = SUCCESS;
        $response["description"] = "SUCCESSFULLY UPDATED";
    } else 
    {
        $response["code"] = SERVER_ERROR; 
        $response["description"] = "ERROR WHILE UPDATING";
    }

    echo json_encode($response);
}