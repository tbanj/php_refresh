<!DOCTYPE html>
<html>
<head>
  
</head>
<body>

    <?php $firstName= "Alabi"; $sex = "10"
    
    ?><br/>
    Is age variable set: <?php 
    // use isset() to check if a variable exist
    echo isset($age);
    ?><br/>
    Is firstname variable set: <?php 
    // use isset() to check if a variable exist
    echo isset($firstName); ?><br/>

    <!-- to erase variable you make use of unset -->
<?php unset($firstName);
    $age =32;
?>
    Age is set now: <?php 
    // use isset() to check if a variable exist
    echo isset($age);
    ?><br/>
    Firstname has being erased,its empty: <?php 
    // use isset() to check if a variable exist
    echo isset($firstName); ?><br/>

    <!-- empty is use to check if a string does not exist -->
    if Firstname is empty return 1: <?php 
    // use isset() to check if a variable exist
    echo empty($firstName); ?><br/>
    age is not empty it will return nothing(false): <?php 
    // use isset() to check if a variable exist
    echo empty($age); ?><br/>
</body>
</html>