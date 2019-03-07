<!DOCTYPE html>
<html>
<head>
    
    <title>Conditional Statements & Switch</title>
    
</head>
<body>
    If statement: <?php 
        $a= 12; $b=5;
    if ($a > $b) {
        echo "a is larger than b";
    }
    ?><br/>
    if statement with logic operation: <?php if (is_integer($a) && ($a > $b)) {
        echo "it check if $ a is integer and also greater than $ b ";
    }?><br/>

    <!-- switch statements -->
    <!-- is use to test for only one values -->
    Switch Statements: <br/>
    Is your name in our database: <?php 
    $surname = "Olabanji";

    switch ($surname) {
        case "Oladele":
            echo "You are Oladele";
            break;
        case "Olabanji":
            echo "You are Olabanj";
            break;
        
        default:
            echo "We dont your data kindly check back later";
    }?>
</body>
</html>