<?php

/**
 * This is to load environment
 */
include_once ("config.php");
include_once ("constants.php");

define("TABLE_NAME", "yourtablename");
/**
 * This code is for selecting all informations 
 */
if (isset($_GET['index']))
{
    //Select code here
}

/**
 * This code is for selecting one information only
 */
if (isset($_GET['show']))
{
   $id = $_GET['id'];
   
   //Select where 1
}

/**
 * This code is for creating new resource
 */
if (isset($_POST['store']))
{
    $data = json_decode($_POST['store']);

    //insert sql statement here
}

/**
 *  For Deleteing
 */
if (isset($_POST['destroy']))
{
    $id = $_POST['id'];

    //Delete codes here
}


/**
 * For Update
 */

 if (isset($_POST['update']))
 {
    $id = $_POST['id'];
    $data = json_decode($_POST['update']);
 }