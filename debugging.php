<!DOCTYPE html>
<html>
<head>
    
    <title>Debugging Php</title>
</head>
<body>
    <?php ?>
    <?php 
    $scores =10;
    $currencyUnit = 4.5;

    $arrayAge = array(5,3,9,10);
    $arrayAge = get_defined_vars();
    // make variable readable to humans
    echo "variable will be readable print_r is use for array: ".print_r($arrayAge). "<br/>";
    echo "print variable type: ".gettype($currencyUnit). "<br/>";
    echo "print variable type & value: ".var_dump($currencyUnit). "<br/>";
    // echo "array of defined variable: ". $arrayAge. "<br/>";
    ?>
</body>
</html>