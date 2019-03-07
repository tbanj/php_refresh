
<!-- cookies have to be place before html tag
    because it has to check if the cookies is valid or
    before allowing for the view of html tag
    also it also use to check validity of api-->
<?php 
    //  setcookie($name, $value, $expire);
    // $expire is use to set when the cookie will expire & log the user out
    // for a day $expire = time()+60*60*24;
    // for an hour $expire = time()+60*60;
    setcookie('test', 45, time()+(60*60*24*7));
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    
<!-- Remember to set cookies before any html tag 
    unless output buffering is turned on-->

    Remember to set cookies before any html tag 
    unless output buffering is turned on<br/>

    <!-- Below tag is use to read cookies store on localhost
        you make use of syntax $_COOKIE-->
    <p>Below tag is use to read cookies store in the local storage</p><br/>
    <?php 
        $var1 = $_COOKIE['test'];
        echo "cookie store value is: ". $var1. "<br/>"?><br/>

        <!-- to set delete cookies when is no longer needed -->

        <p>to set delete cookies when is no longer needed</p><br/>
        <p>is either to set the cookies has expired or set the value to null</p>
        
</body>
</html>