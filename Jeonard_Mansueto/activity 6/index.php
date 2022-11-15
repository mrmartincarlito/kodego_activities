<?php
$totkgs=0;
$totitms=0;
$overTotal=0;
$totaldiscount=0;
$Invoices = array(
    array("qty"=>8,"desc"=>"melon","amt"=>100,"unt"=>"pcs.","discnt"=>0.10),
    array("qty"=>7,"desc"=>"Ganador","amt"=>50,"unt"=>"kgs.","discnt"=>0.10),
    array("qty"=>10,"desc"=>"Mango","amt"=>150,"unt"=>"kgs.","discnt"=>0),
    array("qty"=>23,"desc"=>"Meat","amt"=>300,"unt"=>"kgs.","discnt"=>0),
    array("qty"=>20,"desc"=>"chicken","amt"=>200,"unt"=>"kgs.","discnt"=>0.20),
    array("qty"=>8,"desc"=>"biscuit","amt"=>10,"unt"=>"pcs.","discnt"=>0.10),
    array("qty"=>8,"desc"=>"beefloaf","amt"=>30,"unt"=>"pcs.","discnt"=>0.10),
);

echo "--------------------------------------"."<br>";
echo  "    " . "    OFFICIAL RECEIPT"."<br>";
echo "--------------------------------------"."<br>";
ECHO   "QTY     DESCRIPTION     AMOUNT"."<br>";
foreach ($Invoices  as $Invoice) {
    $total= $Invoice["qty"] * $Invoice["amt"];
    $overTotal+=$total;
    echo $Invoice["qty"].$Invoice["unt"]."\t". $Invoice["desc"]."@".$Invoice["amt"]."\t".number_format($total,2 )."<br>";
    
    if($Invoice["unt"]=="kgs."){
    $invoice["qty"]=1;
    $totkgs+=$invoice["qty"];
    }
    if($Invoice["unt"]!="kgs."){
     $totitms+=$Invoice["qty"];
        }
}
echo "--------------------------------------"."<br>";
echo"SUB-TOTAL:";
echo $totkgs + $totitms;
echo " "."ITEM(S)".   "\t".number_format($overTotal,2)."<br>";

echo "Discount:"."<br>";
foreach ($Invoices as $discplay ){
  $discitem= $discplay["qty"] * $discplay["amt"];
  $discount=$discplay["discnt"]*$discitem*-1;
  $totaldiscount+=$discount;
  if($discplay["discnt"]>0){
        echo "  \t ".$discplay["desc"]."@".($discplay["discnt"]*100)."%"."\t"."\t".$discount."<br>";
    }
}
echo "TOTAL:                      "."\t".number_format($overTotal+$totaldiscount,2)."<br>";
echo "-----------------------------------------"."<br>";
echo  "Cashier: Jeonard Masueto"."\n";
echo "TRANS#: 00000001 ORDER#: 0000000234"."<br>";
echo "Date/time " .date("Y/m/d")." ". date("h:i:s")."<br>";


echo "\t"."END OF BILLING"."<br>";
echo "========================================="."<br>";
echo "THIS RECEIPT IS NOT VALID FOR CLAIM OF INPUT TAX"."<br>";

?>
