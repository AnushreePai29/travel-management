<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    /* .container{
        max-width: 80%;
        background-color: red;
        margin:auto;
        padding:23px;

    } */
</style>
<body>
   <div class="container">
    <h1>Lets Learn About PHP.</h1>
    <p>Your party status is here: </p>
    <?php
    $age = 6;
    if($age> 18){
        echo "You can go to the party";
    }
    else if ($age==7){
        echo " you are 7 years old";
    }
    else if ($age==6){
        echo " you are 6 years old";
    }
    else{
        echo "You cannot go to the  party";
    }
    echo "<br>";
    $languages = array("python","C++","php", "NodeJs");
    // echo count($languages);
    // echo "<br>";
    // echo $languages[0];

    //loops in php
    $a=0;
    while ($a <= 10) {
       echo"<br>";
        echo " The Value of a is : ";
        echo $a;
        $a++;
    }

    //Iterating arrays in php using while loop 
     $a=0;
    while ($a < count($languages)) {
       echo"<br>";
        echo " The Value of languages is : ";
        echo $languages[$a];
        $a++;
    }

    //do while loop
    $a =20;
    do{
        echo "<br>The value of a is: ";
        echo $a;
        $a++;

    } while($a < 10);

    //for loop
    
    for($a=0;$a<10; $a++){
        echo "<br>The value of a is : ";
        echo $a;
    }
    //for each loop
    foreach($languages as $value){
        echo "<br>The value from foreach loop is :";
        echo $value;
    }

    // function
    function print5(){
        echo "<br>FIVE";
    }
    print5();
    function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }
    print_number(45);


    ?>

    
   </div> 
</body>
</html>