<!DOCTYPE html>
<html>
<head>
    
    <title>Constants</title>
    
</head>
<body>
    <!-- for constants variable you wont make use of $ sign & variable name will be all caps-->
    Constants: <?php 
    $max_width = 980;
    define("MAX_WIDTH", 900);
    echo MAX_WIDTH?><br/>
when you add another value to it, it wont change, it will throw an error: <?php 
// MAX_WIDTH = MAX_WIDTH +1;

// but this wont throw an error 
// $max_width = $max_width +1;
    // echo $max_width ?>
</body>
</html>