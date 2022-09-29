<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>


    <hi><?="Q1::write a function that takes an array of numbers and a number
and return an array with all indexes of this number in the array but not the first one you find 
the second and the third only 
ex :
input : [1,2,1,3,4,1] , 1
output : [2,5]"?></h1>
<br>

<?php

$arr=[1,2,1,3,4,1];
$n=6;
$countt=[];
// ()array_search

function linearSearch($arr, $n)
{
    for($i = 0; $i < count($arr) ; $i++)  
    {
        if($arr[$i] == $i)
           $countt+=[$i];
    }
 
    // If no fixed point present then
    // return -1

    if($i==5)
    {
        echo "$countt";

        for($i = 1; $i < count($countt) ; $i++)
        {
          echo 'the number of value place is '."<br>".i;

        }
        echo "the countan is "."count($countt)";
    }

}




 
    // Driver Code
    $arr = array(-10, -1, 0, 3, 10,
                  11, 30, 50, 100);
    $n = count($arr);
    echo "Fixed Point is ".
            linearSearch($arr, $n);
 
// This code is contributed by Sam007






linearSearch($arr.$n);
?>


<br>
<h1>"write a function that takes a number and return the summation of all the numbers in it 
ex :
input : 1234 
output : 10</h1>


<?php

    $array = array(1,2,3,4,5,6,7,8,9,10);  
    $count = count($array);

    $sum = 0;

    for($i=0;$i<$count;$i++){
      $sum  += $array[$i];
    }
    echo $sum ;
?>





    
    </body>
</html>