<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <p>Raw url encoding works</p><br/>
    <p>Data appends to url above is printed below</p><br/>
    <?php 
        $params1 = $_GET['params1'];
        $params2 = $_GET['params2'];
        echo rawurldecode($params1). "<br/>";
        echo htmlspecialchars($params2)
    ?>
</body>
</html>