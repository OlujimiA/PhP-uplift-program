<?php
    echo "<b>Question 1: Boolean</b><br>";
    $menu = False;
    var_dump($menu);

    $name = 'Victoria';
    echo "<br><br><b>Question 2: String</b><br>";
    echo $name;

    echo "<br><br><b>Question 3: Number</b><br>";
    $age = 16;
    echo $age;

    echo "<br><br><b>Question 4: Array of 5 items</b><br>";
    $fruits = array("Apple", "Banana", "Coconut", "Orange", "Pineapple");
    var_dump($fruits);

    echo "<br><br><b>Question 5: Echo each item in the array on a new line</b><br>";
    foreach ($fruits as $fruit){
        echo $fruit."<br>";
    }
?>