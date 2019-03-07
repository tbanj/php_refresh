<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Encoding html Explain In Better Way</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php 
        $url_page = 'pract_php/webpractice/url.php';
        $params1 = 'this is a string';
        $params2 = '"bad"/ <>characters$';
        $linktext = "<Click> & you will see";
        ?> 
        <?php 
        // this gives you a clean link to use
            $url = "http://localhost/";
            $url .= rawurldecode($url_page);
            $url .= "?params1=". urlencode($params1);
            $url .= "&params2=". urlencode($params2);
        ?>
     
    <!-- encoding html what it means is that you want to display symbol 
     but colliding with html tag make use linktext through php before referencing it
    at html 1st step-->
    <?php  $linktext= "<Click> & you will see Third page"; ?>
    

    <!--url encoding its use to send symbols with text to another page -->
    <a href="<?php echo htmlspecialchars($url); ?>" > 
    <!-- encoding html 2nd step 
        htmlspecialchars is use to escape any bad variable that might affects
        html page-->
    <?php echo htmlspecialchars($linktext); ?>
    </a><br/>

    
</body>
</html>