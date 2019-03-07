<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forms Processing Page</title>
</head>
<body>
    
<?php 
    // $_POST is use to extract data inputted or gotten from a form
    // either in the same page or previous page
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "{$username}: {$password}";
?>
</body>
</html>