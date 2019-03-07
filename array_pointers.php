<!DOCTYPE html>
<html>
<head>
    <title>Array Pointers for loops </title>
</head>
<body>
    
    <?php  echo "Array Pointers means checking where the pointer currently: "; ?><br/>
    <?php  echo "focuse on using this arr $ students =: wale dele omolabi owodele"; ?><br/>
     <br/>
    <?php $students= array("wale", "dele", "omolabi", "owodele");?><br/>
    <?php  echo "student in position 1: ". current($students);?><br/>
     <!-- //to point array to next member of its array you make use of next() -->
    <?php  echo next($students)?>
    <?php  echo "student in position 2: ". current($students);?><br/>

    <!-- using it in for loop -->
    <?php  $numList = array(100,10,50,40,31);
        while ($num = current($numList)) {
            echo $num. ", ";
            next($numList);
    }?><br/>

    <!-- using for loops -->
    <?php  $numListfor = array(10,150,90,60,51);
        
        for ($i=0; $i < sizeof($numListfor); $i++) { 
            # code...
            $numfor = current($numListfor);
            echo $numfor. ", ";
            next($numListfor);
        }?><br/>

        <!-- forloop without next() -->
        <?php  $numListfor = array(10,150,90,60,51);
        echo "For loop only: ". "<br/>";
        for ($i=0; $i < sizeof($numListfor); $i++) { 
            
            echo $numListfor[$i]. "<br/>"  ;
            
        }?><br/>
</body>
</html>