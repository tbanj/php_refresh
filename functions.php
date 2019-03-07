<!DOCTYPE html>
<html>
<head>
 
    <title>Functions</title>
   
</head>
<body>
    <?php 
        function practiceNumArray () {
            $numListfor = array(10,150,90,60,51);
        echo "For loop only: ". "<br/>";
        for ($i=0; $i < sizeof($numListfor); $i++) { 
            
            echo $numListfor[$i]. "<br/>"  ;
            
        }
        }

        // calling function practiceNumArray()
        practiceNumArray();

        function rectangleTest () {
            $length = 10; 
            $breadth =12;
            $areaRec = $length * $breadth;
            return $areaRec;
        
        }
        // call rectangleTest() to print value of the area
        echo "<br/>";
        echo rectangleTest(). "<br/>";


        function moreThanOneVariable () {
            $age =100;
            $length= 50;
            $storeVar = array($age, $length);
            return $storeVar;
        
        }
        $storeArray = moreThanOneVariable();
        /* to show contents of  return array you have to loop through*/
        echo "array value 1: ".$storeArray[0]."<br/>";
        echo "array value 2: ".$storeArray[1]. "<br/>";
        ?><br/>

        <!-- setting global variables -->
        <?php 
        $first_name = "outside name Temitope";
        $last_name = "outside name Olabanji";
        function AccessingGlobalVar()
        {
              // to access a variable declare outside a function
            // you need to append it with global syntax

            // global variable will be printed
            global $first_name;
            echo "global syntax has being appended: ". "<br/>";
            echo  $first_name="inside name Temitope"."<br/>";
        }

        echo AccessingGlobalVar();

        // local variable will be printed
        function WithinFunctionAlone()
        {
            // local variable will be printed
            echo $last_name="inside name Olabanji". "<br/>";
        }
        WithinFunctionAlone();

        // using default value when no arguments is passed during funtion call
        function useDefaultParams($location="Abuja")
        {
            // local variable will be printed
            echo "what is your destination:  {$location}". "<br/>";
        }

        useDefaultParams();
        echo "the default wont be use since it has a new argument"."<br/>";
        useDefaultParams("Lagos");
        
        ?>

</body>
</html>