<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // $a = 65;
        // $b = 5;
        // if($a > 78){
        //     echo "a is greater than 78";
        // }
        // else{
        //     echo "a is not greater than 78";
        // }
        // $age = 54;
        // if($age > 18){
        //     echo "You can drink water with chai and alcohol.";
        // }
        // elseif($age > 13){
        //     echo "You can drink water with chai. No alcohol for you.";
        // }
        // else{
        //     echo "You can drink water. No alcohol or chai for you.";
        // }

        // echo "While loops in php.";
        // $i = 1;
        // echo "<br>";
        // while($i<10){
        //     echo $i;
        //     echo "<br>";
        //     $i++;
        //  }
        // for ($i=0; $i < 5; $i++) { 
        //     # code...
        //     echo "This number is $i";
        //     echo "<br>";
        //  }
        // $arr = array("bananas","apples","Harpic","Bread");
        // for ($i=0; $i < count($arr) ; $i++) { 
        //         # code...
        //         echo $arr[$i];
        //         echo "<br>";
        // $arr = array("bananas","apples","Harpic","Bread","Chocolate");
        // foreach ($arr as $ele){
        //     echo $ele;
        //     echo "<br>";
        // }
        // function processMarks($marksAllArr){
        //     $sum = 0;
        //     foreach ($marksAllArr as $marks){
        //         $sum += $marks;
        //     }
        //     return $sum;
        // }
        // $marksAllArr = [10,20,10,20];
        // echo var_dump($marksAllArr);
        // echo "<br>";
        // echo processMarks($marksAllArr);
        // $d = date("d D Y l");
        // echo $d;

        //associative arrays
        // $favcolor = array("Narayana"=>"Black","smit"=>"Green","Laura"=>"White");
        // echo $favcolor["Narayana"];
        // echo "<br>";
        // echo $favcolor["smit"];
        // echo "<br>";
        // echo $favcolor["Laura"];

        // multidimensional arrays
        echo "Welcome to multidimensional arrays in php";
        echo "<br>";
        $matrix = array(
                array(2,5,7,8),
                array(1,2,3,1),
                array(4,5,6,8)
                );
        echo var_dump($matrix);


    ?>
</body>
</html>