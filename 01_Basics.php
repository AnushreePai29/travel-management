<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
    <?php
    //constant
       define('PI', 3.14);
        echo "Hello world and this is printed using php";

        //single line comment
        /*
        this 
        is
        a
        multiline comment
        */ 
        //variable
        echo "<br>";
        $variable1=4;
        $variable2 =5;
         echo $variable1;
         echo $variable2;
         echo "<br>";
         echo $variable1 + $variable2 ;

        //  operators in PHP
        // Arithmetic operators
        echo "<br>";
        echo "The value of variable1 + variable2 is ";
        echo $variable1 + $variable2;
        echo "<br>";
        echo "The value of variable1 - variable2 is ";
        echo $variable1 - $variable2;
        echo "<br>";
        echo "The value of variable1 * variable2 is ";
        echo $variable1 * $variable2;
        echo "<br>";
        echo "The value of variable1 / variable2 is ";
        echo $variable1 / $variable2;
        echo "<br>";
        // Assignment operators
        $newVar = $variable1;
        // $newVar += 1;
        // $newVar -= 1;
        // $newVar *= 2;
        $newVar /= 2;
        echo "The value of new variable is";
        echo "$newVar";
        echo"<br>";

        // Comparison operators
        // echo "<h1> Comparison Operators </h1>";
        echo "The value of 1==4 is";
        echo var_dump(1==4);
        echo"<br>";
        echo "The value of 1!=4 is";
        echo var_dump(1!=4);
        echo"<br>";
        echo "The value of 1>=4 is";
        echo var_dump(1>=4);
        echo"<br>";
        echo "The value of 1<=4 is";
        echo var_dump(1<=4);
        echo"<br>";
        // Increment/Decrement operators
       echo $variable1++;
       echo"<br>";
       echo $variable1--;
        echo ++$variable1;
       echo  --$variable1;
        // Logical operators
    //     and(&&)
    //     or(||)
    //     xor |
    //    not !
    // $myVar = (true) and (true);
    $myVar = (true and false);
    echo "<br>";
    echo var_dump($myVar);
       ?>

       <?php
      //Data types in php
    //   1. String
    //   2. integer
    //   3. float
    //   4. boolean
    //   5.Array
    //   6. Object
     echo "<br> Data types <br>";
     $var ="This is a string";
     echo var_dump($var);
     echo "<br>";
     $var =67;
     echo var_dump($var);
     echo "<br>";
     $var =67.1;
     echo var_dump($var);
     echo "<br>";
     $var =true;
     echo var_dump($var);
     echo "<br>";
     echo PI;
       ?>
      
    </div>
</body>
</html>