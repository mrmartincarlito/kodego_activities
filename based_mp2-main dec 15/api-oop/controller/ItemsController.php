<?php
include_once ("BaseController.php");

class ItemsController extends BaseController
{

    private $totalAmount;

    public function setTotalAmount($totalAmount) 
    {
        $this->totalAmount = $totalAmount;
    }

    public function computePrice($qty)
    {
        return $qty * $this->totalAmount;
    }
}