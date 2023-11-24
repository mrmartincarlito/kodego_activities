<?php
$listOfProducts = array(
    array(
        "item" => "Shampoo",
        "price" => 7,
        "quantity" => 2,
        "weight" => 0,
        "discount" => 0
       ),
    array(
        "item" => "Rice",
        "price" => 40,
        "quantity" => 0,
        "weight" => 2,
        "discount" => 10
    ),
    array(
        "item" => "Coffee",
        "price" => 20,
        "quantity" => 3,
        "weight" => 0,
        "discount" => 5
       ),
);
$products = [];

function officialReceipt($products) {
    ?>
      <table width="100%">
            <tr>
                <th>QTY</th>
                <th>DESCRIPTION</th>
                <th>AMOUNT</th>
            </tr>
       
    <?php
    $totalQuantity = 0;
    $subTotalAmount = 0;
    foreach($products as $row) {
        $name = $row['item'];
        $price = number_format($row['price'], 2, '.', '');;
        $quantity = $row['quantity'];
        $weight = $row['weight'];
        $discount = $row['discount'];
        $amountByQuantity = number_format($price * $quantity, 2, '.', '');;
        $amountByWeight = number_format($price * $weight, 2, '.', '');;

        $totalQuantity += $row['quantity'];
        if($row['weight'] > 0) {
            $totalQuantity += 1;
        }else {
            $totalQuantity += 0;
        }
        $subTotalAmount += $amountByQuantity;
        $subTotalAmount += $amountByWeight;

        ?>
        <tr>
            <td><?php 
            if ($quantity == 0) {
                echo $weight."KG";
               }else {
                echo $quantity."PCS";
               }
             ?></td>
            <td><?php echo $name." @ ".$price; ?></td>
            <td><?php 
               if ($quantity == 0) {
                echo $amountByWeight;
               }else {
                echo $amountByQuantity;
               }
            ?></td>
        </tr>
        <?php
    }
    echo "<tr><td colspan='3'>----------------------------------------------------------------------------</td></tr>";
    
    ?>
    <tr>
        <td>SUB-TOTAL: </td>
        <td><?php echo $totalQuantity; ?> ITEM (S)</td>
        <td><?php echo number_format($subTotalAmount, 2, '.', ''); ?></td>
    </tr>
    <tr>
        <td>DISCOUNT: </td>
        <td colspan="2"></td>
    </tr>
    <?php
      $accumulatedDiscount = 0;
        foreach($products as $row) {
            $name = $row['item'];
            $price = number_format($row['price'], 2, '.', '');;
            $quantity = $row['quantity'];
            $weight = $row['weight'];
            $discount = $row['discount'];
            $amountByQuantity = number_format($price * $quantity, 2, '.', '');;
            $amountByWeight = number_format($price * $weight, 2, '.', '');;
            $discountValueWithQty = ($discount / 100) * $amountByQuantity;
            $discountValueWithWeight = ($discount / 100) * $amountByWeight;
            $accumulatedDiscount += $discountValueWithQty;
            $accumulatedDiscount += $discountValueWithWeight;

            if($discount <= 0) {
                continue;
            }
            ?>
            <tr>
                <td> </td>
                <td style="text-align: left;"><?php  echo $name." @ ".$discount."%"; ?></td>
                <td>
                    <?php
                        if($quantity == 0) {
                            echo "-".$discountValueWithWeight;
                        }else {
                            echo "-".$discountValueWithQty;
                        }
                    ?>
                </td>
            </tr>
            <?php
               
            
        }
        $total = $subTotalAmount - $accumulatedDiscount;
        echo "<tr><td colspan='2' style='text-align:left;'>Total: </td><td>".number_format($total,2)."</td></tr>";
        echo "<tr><td colspan='3'>----------------------------------------------------------------------------</td></tr>";
        echo "<tr><td colspan='3'>
        Cashier: Shaikram<br>
        TRANS#: 00000001      ORDER#: 0000000234<br>	
                              OR#: 2235454934<br>
               DATE/TIME: 2022-11-13 23:27:50<br>	
                <br><br><br>

                              END OF BILLING	

        </td></tr>";
        echo "<tr><td colspan='3'>----------------------------------------------------------------------------</td></tr>";
        echo "<tr><td colspan='3'>----------------------------------------------------------------------------</td></tr>";
        echo "<tr><td colspan='3'>THIS RECEIPT IS NOT VALID FOR CLAIM OF INPUT TAX</td></tr>"
    ?>
    
    <?php
    echo "</table>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>Activity 6</title>
</head>
<body>
    <div class="receipt">
        ---------------------------------------------------------------------------- <br>
        <center><span>O F F I C I A L &nbsp; R E C E I P T</span></center>
        ---------------------------------------------------------------------------- <br>
        <?php        
            officialReceipt($listOfProducts);
        ?>
    </div>
</body>
</html>