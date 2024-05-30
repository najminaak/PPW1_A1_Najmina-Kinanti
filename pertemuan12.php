<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 12 (pengenalan php)</title>
</head>
<body>

        <!-- php dengan html (proses deklarasi text pada halaman html) -->
    <?php echo "Hello World <br>";?>


        <!-- komentar pada php -->
    <?php
    // This is a single-line comment
    # This is also a single-line comment

    /*
    This is a multiple-lines comment block
    that spans over multiple 
    lines
    */

    // U can also use comments to leave out parts of a code lines
    $x = 5 /* + 15*/ +5;
    echo $x . "<br>";
    ?>


        <!-- php sensitive case -->
    <?php
        $color = "red";
        echo "my car is " . $color . "<br>";
        // error
        // echo "my house is " . $COLOR . "<br>"; 
        // echo "my boat is " . $coLOR . "<br>"; 
    ?>

        <!-- deklarai variabel -->
    <?php
        $txt = "hello World";
        $x = 5;
        $y = 10.5;
    ?>

        <!-- output variabel 1 -->
    <?php
        $txt = "PPW1";
        echo "i love $txt! <br>";
    ?>

        <!-- output variabel 2 -->
    <?php
       $txt = "PPW1";
       echo "i love " . $txt . "! <br>";
    ?>

        <!-- output variabel 3 dengan operasi aritmatika -->
    <?php
       $x = 5;
       $y = 4;
       echo $x + $y . "<br>";
    ?>


        <!-- mengetahui panjang string -->
    <?php
        echo strlen("Hello World!") . "<br>"; //output 12
    ?>


        <!-- menghitung jumlah kata pada kalimat -->
    <?php
        echo str_word_count("Hello World!")  . "<br>"; //output 2
    ?>


        <!-- membalikkan string -->
    <?php
        echo strrev("Hello World!")  . "<br>"; //output !dlroW olleH
    ?>


        <!-- pencarian dalam string (mencari world di dalam kata hello world) -->
    <?php
        echo strpos("Hello World!", "World")  . "<br>"; //output 6
    ?>


        <!-- mengganti teks -->
    <?php
        echo str_replace("World", "Dolly", "Hello World!") . "<br>"; // output Hello Dolly!
    ?>


        <!-- fungsi -->
    <?php
        function writeMsg() {
            echo "Hello world! <br>";
        }
        writeMsg();
    ?>


        <!-- fungsi dengan argumen -->
    <?php
        function familyName($fname) {
            echo "$fname Jaeger.<br>";
        }
        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");
    ?>


        <!-- fungsi dengan lebih dari 1 argumen -->
    <?php
        function familyyName($fname, $year) {
            echo "$fname Jaeger. Born in $year <br>";
        }
        familyyName("Hege", "1975");
        familyyName("Stale", "1978");
        familyyName("Kai Jim", "1983");
    ?>
    

        <!-- fungsi dengan nilai default pada argumen -->
    <?php
        function setHeight($minheight = 50) {
            echo "The height is : $minheight <br>";
        }
        setHeight(350);
        setHeight();
        setHeight(135);
    ?>


        <!-- fungsi dengan nilai default pada argumen -->
    <?php
        function sum($x, $y) {
            $z = $x + $y;
            return $z;
        }
        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7, 13) . "<br>";
        echo "2 + 4 = " . sum(2, 4);
    ?>
</body>
</html>