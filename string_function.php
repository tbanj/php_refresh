<!DOCTYPE html>
<html>
<body>

<!-- string contenation you make use of .= -->
For string contenation you make use of .= <br/>
<?php
/*  double line comment shift alt A*/ 
$messageA ="How was your day? ";
$messageB=  "What do you do for a living? ";
$messageC = $messageB .= $messageA;
echo $messageC. "<br/>"; 
// to contenate strings you make use of .before you another variable 
echo "Wahab". "<p>to contenate strings you make use of .before you another variable name</p>";
?>

<!-- string contenation you make use of .= -->
 <br/>
<?php
/*  double line comment shift alt A*/ 
echo "<p> all strings lowercase</p>";
$messageA ="How was your day?";
echo strtolower($messageA); 
echo "<p>all strings Uppercase</p>";
echo strtoupper($messageC); 

// to change First word to Uppercase
echo "<p> First word to Uppercase</p>";
echo ucwords($messageC); 

// to change First letter to Uppercase
echo "<p> First letter to Uppercase</p>";
echo ucfirst($messageB); 

// to change all First letter to lowercase
echo "<p> First letter to lowercase:</p>";
echo lcfirst($messageB); 

// to replace a data from a set of data
echo "<p> How to determine length of string</p>";
echo strlen($messageC);

// to trim strings
echo "<p> trimming strings</p>";
echo trim($messageC .= "  go home and rest"); 


// to find a particular data from a variable
echo "<p> To filter a data from a variable or array</p>";
echo strstr($messageC, "you");

// to replace a data from a set of data
echo "<p> Use to replace a data from a set of data</p>";
echo str_replace("How", "hey", $messageC);
?>  




</body>
</html>