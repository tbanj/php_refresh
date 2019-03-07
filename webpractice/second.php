<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Second Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <a href="./first.php">Go back to First page</a>

    <!-- $_GET is use to extract data appended to url from previous page
     which will be usable in another page -->

    <!-- 
    below url is use to access multiple variable which is seperated by &    
    http://localhost/pract_php/webpractice/second.php?id=1&name=%22wale%22 -->
    <?php print_r($_GET);
        $id = $_GET['id'];
        $name = $_GET['name'];
        echo "<br/><strong>" . $id. ": {$name}</strong "."<br/>";
        echo "<br/><strong>" . $name. "</strong";
    ?>
</body>
</html>