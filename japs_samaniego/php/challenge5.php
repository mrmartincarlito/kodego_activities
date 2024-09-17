<?php

$groceryitems = array (
  array("ITEM 1",2,100),
  array("ITEM 2",7,35),
  array("ITEM 3",1,350),
  array("ITEM 4",2,20)
);
$overalltotal=($groceryitems[0][1]*$groceryitems[0][2])+($groceryitems[1][1]*$groceryitems[1][2])+($groceryitems[2][1]*$groceryitems[2][2])+($groceryitems[3][1]*$groceryitems[3][2]);
echo "QTY\tDESC\tAMT\tTOTAL\n";
echo "<br>";
echo "------------------------------\n";
echo "<br>";
echo "(".$groceryitems[0][1].")\t".$groceryitems[0][0]."\t".$groceryitems[0][2]."\t".$groceryitems[0][1]*$groceryitems[0][2]."\n";
echo "<br>";
echo "(".$groceryitems[1][1].")\t".$groceryitems[1][0]."\t".$groceryitems[1][2]."\t".$groceryitems[1][1]*$groceryitems[1][2]."\n";
echo "<br>";
echo "(".$groceryitems[2][1].")\t".$groceryitems[2][0]."\t".$groceryitems[2][2]."\t".$groceryitems[2][1]*$groceryitems[2][2]."\n";
echo "<br>";
echo "(".$groceryitems[3][1].")\t".$groceryitems[3][0]."\t".$groceryitems[3][2]."\t".$groceryitems[3][1]*$groceryitems[3][2]."\n";
echo "<br>";
echo "------------------------------\n";
echo "<br>";
echo "OVERALL TOTAL\t"."\t"."PHP ".$overalltotal;

?>