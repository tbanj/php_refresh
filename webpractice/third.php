<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Third Page</title>
    
</head>
<body>
<?php 
        // super global get is the process of getting data
        //passed through url with syntax $_GET(variable from server)
        print_r($_GET);
        $id = $_GET['id'];
        $name = $_GET['name'];
        echo "<br/><strong>" . $id. ": {$name}</strong "."<br/>";
        // echo "<br/><strong>" . $name. "</strong";
    ?><br/>
    <a href="./first.php">Back to Home page</a><br/>
    <?php 
        $string = "kelvin skoglund";
        echo urlencode($string);
        echo "<br/>";
        echo rawurlencode($string);
    ?>
</body>
</html>