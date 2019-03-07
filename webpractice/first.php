<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>First Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <a href="./second.php?id=42&name=Alabi">Second Page</a><br/>
     
    <!-- encoding html what it means is that you want to display symbol 
     but colliding with html tag make use linktext through php before referencing it
    at html 1st step-->
    <?php  $linktext= "<Click> & you will see Third page"; ?>
    

    <!--url encoding its use to send symbols with text to another page -->
    <a href="./third.php?name= <?php echo urlencode("Olanrewaju&"); ?>&id=50"><?php 
    // encoding html 2nd step
    echo htmlspecialchars($linktext); ?>
    </a><br/>

    
</body>
</html>