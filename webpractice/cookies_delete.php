
<!-- cookies have to be place before html tag
    because it has to check if the cookies is valid or
    before allowing for the view of html tag
    also it also use to check validity of api-->
    <?php 
   // to clear cookies it can be set in 2 ways
   // i. setting the $expire= null;
   // ii. using - instead of + e.g of the cookie was set for 7 days before it have to be -7 days
   // e.g
   // $expire = time()-60*60*24;
    // for a day $expire = time()+60*60*24;
    // for an hour $expire = time()+60*60;
    setcookie('test', 0, time()-(60*60*24*7));
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>To Delete Cookies</title>
</head>
<body>
    
<!-- Remember to set cookies before any html tag 
    unless output buffering is turned on-->

    Remember to set cookies before any html tag 
    unless output buffering is turned on<br/>

    <!-- Below tag is use to read cookies store on localhost
        you make use of syntax $_COOKIE-->
    <p>Below tag is use to read cookies store in the local storage</p>
    

        <!-- to set delete cookies when is no longer needed -->

        <p>to delete cookies when is no longer needed</p>
        <p>is either to set the cookies to date that has expired or set the value to null</p>
        <p>  to clear cookies it can be set in 2 ways<br/>
         i. setting the $expire= null;<br/>
         ii. using - instead of + e.g of the cookie was set for 7 days before it have to be -7 days<br/>
         e.g setcookie('test', 0, time()-(60*60*24*7));<br/>
        </p>
        <?php 
        $var1 = $_COOKIE['test'];
        echo "cookie initially stored has been cleared: ". $var1. "<br/>"?><br/>
</body>
</html>