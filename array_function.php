<!DOCTYPE html>
<html>
<head>
    
</head>
<body>

    <?php 
    
    $array1 = array(10,50,100,120,56);
    
    // print_r is use to print human readable code
    // it sort from highest to lowest
    echo "sort from highest to lowest Array1: ". sort($array1); print_r($array1) ;
    
  
   ?><br/>
   <?php // it sort from lowest to highest
   echo "sort from lowest to highest of Array1: ". rsort($array1); print_r($array1);
  ?>
   <br/>
   
    <?php 
     // check if a particular variable is in array
    // return 1 if true return nothing(false) if not in the array
    echo "if a particular variable is in array Array1: ". in_array(120,$array1); 
    ?>
</body>
</html>