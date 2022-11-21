<?php

// $groceries = array(
//     array(
//       "item" => "Item 1",
//       "qty" => 2,
//       "price" => 100
//       ),
    
//     array(
//         "item" => "Item 2",
//         "qty" => 7,
//         "price" => 35
//         ),
    
//     array(
//         "item" => "Item 3",
//         "qty" => 1,
//         "price" => 350
//         ),
        
//     array(
//         "item" => "Item 4",
//         "qty" => 2,
//         "price" => 20)
//   );
  

//   echo "QTY \t DESC \t AMT \t TOTAL . <br />";
//   echo "--------------------------- <br />";
  
//   $overalltotal = 0;
//   foreach ($groceries as $grocery ) {
    
//     $totalAmount = $grocery["qty"] * $grocery["price"];
//     $overalltotal = $overalltotal + $totalAmount;
//     echo "(" . $grocery["qty"] . ") . <br />";
//     echo $grocery["item"] . "<br />";
//     echo $grocery["price"] . "<br />";
//     echo $totalAmount . "<br />";
//     echo "<br />";
//   }
  
//    echo "--------------------------- <br />";
//    echo "Over all total : " . $overalltotal;

printSumOfEvenAndOdd(20);

function printSumOfEvenAndOdd($num) {
    $totalEven = 0;
    for ($i=1; $i <= $num; $i++) {
        if ($i % 2 == 0){
            echo "Even number:  $i" . '<br />';
            $totalEven = $totalEven + $i;
    }
}
echo "The sum of even numbers is: $totalEven";

}


printSumOfEvenAndOdd(20);

function printSumOfEvenAndOdd($num) {
    $totalEven = 0;
    for ($i=1; $i <= $num; $i++) {
        if ($i % 2 == 0){
            echo "Even number:  $i" . '<br />';
            $totalEven = $totalEven + $i;
    }
}
echo "The sum of even numbers is: $totalEven";

}