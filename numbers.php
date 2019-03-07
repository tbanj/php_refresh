<!DOCTYPE html>
<html>
<body>

<!-- array declaration -->
<?php  $name = array("4", "5"); 
 echo ($name[1]); ?>

 <!-- constant --><br/>
 Constants <br/>
 <?php  
 $constant = 10;
    define("GREETINGS", "Welcome Alabi"); echo "<br/>";
    echo GREETINGS ; echo "<br/>";
    define("BALA", 100);
    echo BALA;echo "<br/>";
    ?>

<!-- to contenate string -->
String Contenation:  <br/>
<?php
$greetings = "Welcome:";
echo "{$greetings} Alabi Temitope";
?>
<br/>

To make Dollar sign show:  <br/>
<?php
$greetings = "Welcome:";
echo "$greetings Alabi Temitope";
?>


<br/>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// 


?>
<?php
$scores = array("20", "40", "50");
echo "<br/>";
echo "<p>size of scores array</p>". sizeof($scores);
echo "<p>scores array member in index 1: $scores[1]</p>";
echo "<br/>";

// to loop through arrays
$scoreslength =sizeof($scores);
for($x = 0; $x < $scoreslength; $x++) {
    echo $scores[$x];
    echo "<br>";
}

// two 2-dimenstional array
$products = array("wella",40,10, 
array("Welcome",50,100),
array("positive",10,50)
);
echo "<br/>";

// to loop through arrays of 2-dimensional
// the arrays have to have the same member number
echo "<p> to loop through arrays of 2-dimensional
the arrays have to have the same member number</p>";
// $productslength =count($products[0]);
$productslengt =count(reset($products));
// echo "<p>Size of Arrays products is $productslengt</p>";
echo "<br>";
// for($x = 0; $x < $productslength; $x++) {
//     // echo $products[$x][0];
//     echo "<br>";
// }
echo "<p>To loop through each elements of the products array</p>";

echo "<p>CARS TOTAL ARRAY ELEMENTS: </p>".count($products);
echo "<p>CARS TOTAL SUB ARRAY ELEMENTS: </p>".count($products[0]);
for ($row = 0; $row < count($products); $row++) {
echo "<p><b>Row number $row</b></p>";
echo "<ul>";
for ($col = 0; $col < count($products[0]); $col++) {
echo "<li>".$products[$row][$col]."</li>";
}
echo "</ul>";
}

// for ($row = 0; $row < count($products); $row++) {
//     echo "<p><b>Row number $row</b></p>";
//     echo "<ul>";
//     for ($col = 0; $col < $productslength; $col++) {
//       echo "<li>".$products[$row][$col]."</li>";
//     }
//     echo "</ul>";
//   }

$fullname = array("wale"=>"100", "Dele"=>"1000");
echo $fullname["wale"]. " " ."<br/>" .$fullname["Dele"];


echo "<p>Array Functions</p>";
// $arrayCheckA = array(10,30,40);
echo min(array(10,30,40));
echo "<p>minimum within array elements</p>";
echo "<br/>";
echo "<p>maximum within array elements</p>";
echo max(array(10,30,40));
echo "<br/>";
echo (min(array(44,16,81,12)));
?>
<br/>

<?php
/*  double line comment shift alt A*/ 
echo $xdiv = 4/3;
?><br/>

Floating Point: <?php echo $xFloat =3.14 ?><br/>
Round Number: <?php echo round($xFloat,1)?><br/>
<!-- means round number to nearest whole number -->
Ceil Number: <?php echo ceil($xFloat)?><br/>

<!-- means round number to its present whole number only-->
Floor Number: <?php echo floor($xFloat)?><br/>


</body>
</html>