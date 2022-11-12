<?php
$total=0;
$Sales = array(
    array("qty"=>2,"desc"=>"item1","amt"=>100),
    array("qty"=>7,"desc"=>"item2","amt"=>35),
    array("qty"=>1,"desc"=>"item3","amt"=>350),
    array("qty"=>2,"desc"=>"item4","amt"=>20)
);
echo "qty desc amt total"."<br>";
echo "--------------------------------------"."<br>";
foreach ($Sales  as $Sale => $value) {
    echo  $value["qty"]." \t". $value["desc"]." \t". $value["amt"]." \t". $value["qty"] * $value["amt"]."<br>";
    $total= $total+ $value["qty"] * $value["amt"];
}

echo "--------------------------------------"."<br>";
echo "Overall Total:" .$total;

?>