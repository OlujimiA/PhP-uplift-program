<?php
    
    function discount($item, $price, $status = "none"){
        $discount = 0;
        $status = strtolower($status);
        if ($status == "premium") {
            $new_price = $price * 0.10;
            $discount = "at 90% off";
            $status = "Premium";
        } elseif($status == "gold"){
            $new_price = $price *0.25;
            $discount = "at 75% off";
            $status = "Gold";
        } elseif ($status == "silver"){
            $new_price = $price * 0.5;
            $discount = "at 50% off";
            $status = "Silver";
        } elseif ($status == "bronze"){
            $new_price = $price * 0.75;
            $dicount = "at 25% off";
            $status = "Bronze";
        } else{
            $status = "";
            $new_price = $price;
            $discount = "no discount";
        }

        return "Thank you for being a <b>$status</b> customer.<br>The original price of $item was NGN$price. 
        <br> You have been given $discount. The price of $item is now NGN<b>$new_price</b>";
    }

    echo discount("Caprisonee", 2500, "GOLD");
?>