<!-- if statement -->
<?php
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
    }
?>


<!-- if...else statement -->
<?php
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?>


<!-- if...elseif...else statement -->
<?php
    $t = date("H");
    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20"){
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?>


<!-- switch statement -->
<?php
    $favcolor = "red";
    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red! <br>";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, or green!";
    }
?>



<!-- while -->
<?php
    $x = 1;
    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
?>


<!-- do...while -->
<?php
    $x = 1;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
?>


<!-- for -->
<?php
    $x = 1;
    for ($x = 0; $x <=10; $x++) {
        echo "The number is: $x <br>";
    }
?>


<!-- foreach -->
<?php
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }
?>



<!-- deklarasi dan akses array -->
<?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>


<!-- mengetahui panjang array -->
<?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars) . "<br>";
?>


<!-- mengakses array melalui perulangan -->
<?php
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);
    for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
?>


<!-- mendeklarasikan associative array dan mengaksesnya -->
<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old. <br>";
?>


<!-- mengakses semua nilai associative array dengan perulangan -->
<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach ($age as $x => $x_value) {
        echo "key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
?>


<!-- array multidimensi -->
<?php
    $cars = array
    (
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }
?>

<!-- tugas nomer 1 -->
<?php
    $students = array(
        "Alice" => 85,
        "Bob" => 70,
        "Charlie" => 90,
        "Dave" => 65,
        "Eve" => 78
    );

    echo "<h2>Students with grades above 75</h2>";

    foreach ($students as $name => $grade) {
        if ($grade > 75) {
            echo "<p><b>Student Name: ".$name."</b></p>";
            echo "<ul>";
            echo "<li>Grade: ".$grade."</li>";
            echo "</ul>";
        }
    }
?>



<!-- tugas nomer 2 -->
<?php
    $products = array(
        array("name" => "Laptop", "price" => 1000, "stock" => 45),
        array("name" => "Smartphone", "price" => 700, "stock" => 120),
        array("name" => "Tablet", "price" => 300, "stock" => 75),
        array("name" => "Smartwatch", "price" => 200, "stock" => 30),
        array("name" => "Headphones", "price" => 100, "stock" => 200)
    );

    echo "<h2>Products with stock more than 50</h2>";

    foreach ($products as $product) {
        if ($product["stock"] > 50) {
            echo "<p><b>Product Name: ".$product["name"]."</b></p>";
            echo "<ul>";
            echo "<li>Price: $".$product["price"]."</li>";
            echo "<li>Stock: ".$product["stock"]."</li>";
            echo "</ul>";
        }
    }
?>

