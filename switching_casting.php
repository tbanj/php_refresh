<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
   <?php ?> <br/>

   <?php $var1 = "10";
   echo "here var1 is string:". gettype($var1). "<br/>";?><br/> 
   <?php
   $var1 += 3;
   $var2= 100;
   echo $var1;?><br/>

    <!--to gettype of var1 & var2  -->
    <?php echo gettype($var1). "<br/>";
    echo gettype($var2); 
     ?> 

<br/>
    <!--to check if var3 is string or check vfor any variable type it will start with is_float or is_integer e.t.c  -->
    <?php $var3= 11;
    echo "if its not it will return nothing(false), if its it will return 1(true) ". "<br/>";
    echo "Is var3 a string,  ". is_string($var3). "<br/>";
    echo "Is var3 an integer,  ". is_integer($var3). "<br/>";
    // echo gettype($var2); 
     ?> 
</body>
</html>