<!DOCTYPE html>
<html>
<body>

<?php
/*  double line comment shift alt A*/ 
$var = "Hello";
echo "Hello World \n";
echo "My first PHP script! \n";
echo "Alabi Temitope Wahab \n";
// single comments
echo $x = 4+5;
$products = array("wella", "40", "dele", 
array("Welcome", "50", "ola"),
array("positive", "10", "board"));

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
    echo "<p>CARS TOTAL ARRAY ELEMENTS: </p>".count($cars);
    echo "<p>CARS TOTAL SUB ARRAY ELEMENTS: </p>".count($cars[0]);
for ($row = 0; $row < count($cars); $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < count($cars[0]); $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}


$pro = array
  (
  array("Volvo","22","bolaa"),
  array("BMW","15","laraa"),
  array("Saab","5","owode")
  );
    echo "<p>CARS TOTAL ARRAY ELEMENTS: </p>".count($pro);
    echo "<p>CARS TOTAL SUB ARRAY ELEMENTS: </p>".count($pro[0]);
for ($row = 0; $row < count($pro); $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < count($pro[0]); $col++) {
    $retVal = (is_numeric($pro[$row][$col])) ? $pro[$row][$col] +1 : $pro[$row][$col] ;
    echo "<li>".$retVal."</li>";

  }
  echo "</ul>";
}
?>

</body>
</html>