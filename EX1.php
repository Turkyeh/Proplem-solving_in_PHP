<!DOCTYPE html>  
<html>  
<body>  

<h1>Q1: Write a program that will count the "r" characters in a string
</h1>
<?php  
$sentence = "Beauty lies  in the eyes of beholderr";  
$wordCount = 0;  
   
for($i = 0; $i < strlen($sentence)-1; $i++) {  
    //Counts all the spaces present in the string  
    //It doesn't include the first space as it won't be considered as a word  
    if($sentence[$i] == 'r') {  
        $wordCount++;  
    }  
}  
//To count the last word present in the string, increment wordCount by 1  
$wordCount++;  
   
//Displays the total number of words present in the given string  
print("Total number of 'r' in the given string: " . $wordCount);  
?> 

<!-- anthor answer  -->


<h1>Write a PHP function that checks whether a string is all lowercase
</h1>

<?php
function is_str_lowercase($str1)
   {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') &&
          ord($str1[$sc]) <= ord('Z')) {
      return false;
         }
         }
      return true;
       }
var_dump(is_str_lowercase('nOot'));
?>

<!-- https://theasciicode.com.ar/ -->
<!-- see this link to learn more about soudo code -->


<!-- another answer  -->
<br>
<?php
$string = "string";

if (ctype_lower($string)) {
    echo $string . ' is all lowercase letters.';
} else {
    echo $string . ' is not all lowercase letters.';
}


?>
<br>

<?php

//wellcome mine 



?>
<!-- <?php
// $flag=0;
// function islowercase($str1)
//    {
//     for ($sc = 0; $sc < strlen($str1); $sc++) {
// 	      if (ord($str1[$sc]) >= 94 &&
//           ord($str1[$sc]) <= 122) {
//          $flag=1;
//         }
        
       
//        else {
//        $flag=0;
//        }
//     }
// }

// if($flag==0){echo"All latter is small later"};
// else {echo"we have a capital latter "   };
    

// islowercase('YASO'));


?> -->

<?php


// Q3: Write a PHP script that creates the following table (use for loops).

function createTable()
{
    echo "<table>";
    for ($i = 1; $i < 11; $i++) {
        echo "<tr>";
        for ($j = 1; $j < 11; $j++) {

            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
        // echo "<br>";
    }
    echo "</table>";
}
echo "<pre>";
echo <<<"Answer"
<pre>
Q3: Write a PHP script that creates the following table (use for loops).
</pre>
Answer;
createTable();
echo "</pre>";






// Q5: Write a PHP Calculator class that will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request. For example :
// $mycalc = new MyCalculator( 12, 6);
// echo $mycalc- > add(); // Displays 18
// echo $mycalc- > multiply()

// class MyCalculator
// {
//     protected $num1, $num2;
//     function __construct($num1, $num2)
//     {
//         $this->num1 = $num1;
//         $this->num2 = $num2;
//     }


//     function __destruct()
//     {
//         echo <<<"Answer"
//     <pre>
//     THe end of all WarpUp tasks <br>
//     </pre>
//     Answer;
//     }

//     public function add()
//     {
//         return $this->num1 + $this->num2;
//     }
//     public function sub()
//     {
//         return $this->num1 - $this->num2;
//     }

//     public function multiply()
//     {
//         return $this->num1 * $this->num2;
//     }

//     public function div()
//     {
//         return $this->num1 / $this->num2;
//     }
// }

// class Scientific extends MyCalculator{
//     protected $num1, $num2;
// function __construct( $num1, $num2){
//     MyCalculator::__construct( $num1, $num2);
// }

// public function power()
// {
//     return pow($this->num1 , $this->num2);
// }

// function __destruct()
// {
//     echo <<<"Answer"
// <pre>
// THe end of Scientific class <br>
// </pre>
// Answer;
// }


// }

// $mycalc = new MyCalculator( 10, 2);
// $cal2= new Scientific(10,2);
// echo "<pre>";
// echo <<<"Answer"
// <pre>
// Q5: Write a PHP Calculator class that will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request. 
// </pre>
// Answer;
// echo "</pre>";


// echo "parent class Add & sub (10,2) <br>";

// echo $mycalc-> add()."<br>"; 
// echo $mycalc-> sub()."<br>";

// echo "child class Add & sub & power (10,2) <br>";
// echo $cal2-> add()."<br>"; 
// echo $cal2-> multiply()."<br>";
// echo $cal2-> power()."<br>"; 










// Q4: Write a PHP script to extract text (within square brackets ) from a string. 
// Sample strings: 'The quick brown [fox].'
// Expected Output: 'fox'

function extractWithinBrackets($str)
{
    $newStr = "";
    for ($i = 0; $i <= strlen($str); $i++) {
        if (substr($str, $i, 1) == '[') {
            while (substr($str, ++$i, 1) != "]" && $i <= strlen($str)) {
                $newStr .= substr($str, $i, 1);
            }
        }
    }
    return $newStr;
}
echo "<pre>";
echo <<<"Answer"
<pre>
Q4: Write a PHP script to extract text (within square brackets ) from a string.
</pre>
Answer;
echo extractWithinBrackets('The quick brown [fox].');
echo "</pre>";





?>






</body>  
</html>  