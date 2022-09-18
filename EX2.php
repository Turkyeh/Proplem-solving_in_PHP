<?php
# Q1 Write a PHP script to see if the specified year is a leap year or not.

$year = 2016;

if ($year % 4 == 0 && $year % 100 != 0  || $year % 400 == 0) {
    print " This year is a leap year <br>";
} else {
    print "This year is not a leap year <br>";
}

# Q2 Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20,
# we are in winter otherwise the season is summer.
// Sample Input: 27
// Sample Output: ‘It is summertime!’
$temperature = 20;

if ($temperature < 20) {
    print "It is wintertime! <br>";
} else {
    print "It is summertime! <br>";
}




// Q3 Write a PHP script to calculate the sum of the two integers. If the two values ​​are the same, then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12

$firstInteger = 2;
$secondInteger = 2;
$sum = 0;
if ($firstInteger == $secondInteger) {
    $sum = ($firstInteger + $secondInteger) * 3;
} else {
    $sum = ($firstInteger + $secondInteger);
}
echo "$sum <br>";


// Q4 Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false"



$firstIntege = 10;
$secondIntege = 10;

if (($firstIntege + $secondIntege) == 30) {
    echo "$firstIntege" + "$secondIntege";
} else {
    echo "false";
}

//Q5 Write in PHP script to check if the given positive number is a multiple of 3.
$num = 20;

if ($num % 3 == 0) {
    echo ' true';
} else {
    echo '<br>false';
}

//Q6 Write a PHP script to check if the integer value ​​is in the range of [20-50] inclusive.

$int = 50;
if ($int >= 20 && $int <= 50) {
    echo '<br> true';
} else {
    echo 'false';
}

//Q7 Write PHP script to find the largest number between the three integers
$arr = [1, 5, 9];
$largest = 0;
foreach ($arr as $n) {
    if ($n > $largest) {
        $largest = $n;
    }
}
echo "<br>$largest";

//Q8 Write PHP script to calculate the monthly electricity bill according to these rules
$unit = 145;
$pill = 0;

if ($unit <= 50) {
    echo $pill = $unit * 2.50;
} elseif ($unit <= 150) {
    echo $pill = $unit * 5;
} elseif ($unit <= 250) {
    echo   $pill = $unit * 6.20;
} else {
    echo  $pill = $unit * 7.50;
}




# Q9
/*
 Write php script to make a calculator, the calculator should contain the four main operations 
    Addition
    Subtraction
    Multiplication
    Division */

$num1 = 3;
$num2  = 9;

$op = '+';

switch ($op) {
    case '+':
        print $num1 + $num2;
        break;
    case '-':
        print $num1 - $num2;
        break;
    case '':
        print $num1 * $num2;
        break;
    case '/':
        print $num1 / $num2;
        break;
}
echo "<br><br>";



# Q10

/*Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
      Sample Input: 15
      Sample Output: ‘is no eligible to vote’
*/

$age = 15;
if ($age < 18)
    print "is not eligible to vote";
else
    print "eligible to vote";

echo "<br><br>";



# Q11
/*  Write php script  to check whether a number is positive, negative or zero
     Sample Input: -60
      Sample Output: ‘Negative’ */

$posORneg = -60;
if ($posORneg < 0)
    print "Negative";
elseif ($posORneg > 0)
    print "Positive";
else
    print "zero";

echo "<br><br>";


# Q12

/*Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 
  Sample Inputs: [60,86,95,63,55,74,79,62,50]
  Sample Output: ‘D’ */

$marks = array(60, 86, 95, 63, 55, 74, 79, 62, 50);

$sum = 0;

foreach ($marks as $val) {
    $sum += $val;
}
$avg = $sum / count($marks);
if ($avg < 60)
    print "F";
elseif ($avg < 70)
    print "D";
elseif ($avg < 80)
    print "C";
elseif ($avg < 90)
    print "B";
elseif ($avg < 100)
    print "A";



//  Q13   Write a script to generate the following paragraph 

// "The memory of that scene for me is like a frame of film forever frozen at that moment:
//  the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from $colors array.

$colors = array('red', 'green', 'white');
echo "<pre>";
echo <<<"paragraph"
   The memory of that scene for me is like a frame of film forever frozen at that moment:
   the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
paragraph;
echo "<pre>";
#Q13
// $colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list :
// Expected Output:  
// green
// red
// white
$colors = array('red', 'green', 'white');
echo "<pre>";
echo <<<"unorderedList"
       <ul>
         <li> $colors[0] </li>
         <li> $colors[1] </li>
         <li> $colors[2] </li>
      </ul>
    unorderedList;
echo "</pre>";



#Q14
// $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 

$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

echo "<pre>";
foreach ($cities as $capital => $city) {
    echo "The capital of $capital is  $city \n";
}
echo "</pre>";



#Q15
// $color = array (4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to display the first element of the above array. 
// Expected Output:  white

$color = array(4 => 'white', 6 => 'green', 11 => 'red');
print $color['4'];




#Q16
// Write a PHP script that inserts a specific new item in an array in any position.
// Sample Input:
// Array 1 2 3 4 5   
// Location: 4
// New Item: $
// Expected Output: 1 2 3 $ 4 5

function addNewItem($arr, $item, $location)
{
    $arr[$location] = $item;
    return $arr;
}

$color = array(4 => 'white', 6 => 'green', 11 => 'red');
$color = addNewItem($color, "blue", '10');
print_r($color);




#Q17
// Write a PHP script to sort the following associative array depending on the key value [asc] : 
// Sample Input: 
// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);

echo "<pre>";
foreach ($fruits as $alph => $fruit) {
    echo "$alph =  $fruit \n";
}
echo "</pre>";




#Q18
// Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 

// Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

// Expected Output:
// Average Temperature is: 70.6 
// List of seven lowest temperatures: 60, 62, 63, 63, 64, 
// List of seven highest temperatures: 76, 76, 78, 79, 85,

function Temperature($arrOfTemper)
{
    sort($arrOfTemper);
    $sum = 0;
    foreach ($arrOfTemper as $temper) {
        $sum += $temper;
    }
    $avg = $sum / count($arrOfTemper);
    echo "<hr>";
    echo "Average Temperature is: <br>" . $avg;
    echo "List of seven lowest temperatures: <br>";
    print_r(array_splice($arrOfTemper, 0, 5));
    echo "List of seven highest temperatures: <br>";
    print_r(array_splice($arrOfTemper, -5, 5));

    echo "<hr>";
}


Temperature([78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73]);



#Q19
// Write a PHP program to merge the following two arrays. 

// Sample Input: 

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// Expected Output:

// Array
// (
//     [color] => green
//     [0] => 2
//     [1] => 4
//     [2] => a
//     [3] => b
//     [shape] => trapezoid
//     [4] => 4
// )

function mergeArrays($array1, $array2)
{
    $newArray = array_merge($array1, $array2);
    echo "<hr>";
    echo "new array <br>";
    print_r($newArray);
    echo "<hr>";
}


$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

mergeArrays($array1, $array2);


#Q20
// Write a PHP function to change the following array's and convert all the strings to upper case. 

// Sample Input:

// $colors = array("red","blue", "white","yellow");

// Expected Output :

// Array
// (
//     RED
//     BLUE
//     WHITE
//     YELLOW

// )

function cinvertToUpper($arrayOfString)
{
    for ($i = 0; $i < count($arrayOfString); $i++) {

        $arrayOfString[$i] = strtoupper($arrayOfString[$i]);
    }


    echo "<hr>";
    print_r($arrayOfString);
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
}
$colors = array("red", "blue", "white", "yellow");
cinvertToUpper($colors);


// Write a PHP function to change the following array's and convert all the strings to lower case. 

// Sample Input:

// $colors = array("RED","BLUE", "WHITE","YELLOW");

// Expected Output :

// Array
// (
//     red
//     blue
//     white
//     yellow

// )


function cinvertTolower($arrayOfString)
{
    for ($i = 0; $i < count($arrayOfString); $i++) {

        $arrayOfString[$i] = strtolower($arrayOfString[$i]);
    }


    echo "<hr>";
    print_r($arrayOfString);
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
}
$colors = array("RED", "BLUE", "WHITE", "YELLOW");
cinvertTolower($colors);



// Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

// Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248

function divisibleBy4()
{

    for ($i = 200; $i <= 250; $i++) {
        if ($i % 4 == 0) {

            echo "$i \t";
        }
    }
}
echo "<hr>";
divisibleBy4();
echo "<hr>";


// Write a PHP script to get the shortest/longest string length from an array. 

// Sample Input:

//  $words =  array("abcd","abc","de","hjjj","g","wer")

// Expected Output : 

// The shortest array length is 1. The longest array length is 4.


function long($arr)
{
    $shortest = $arr[0];
    $longest = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if (strlen($arr[$i]) < strlen($shortest)) {
            $shortest = $arr[$i];
        }
        if (strlen($arr[$i]) > strlen($longest)) {
            $longest = $arr[$i];
        }
    }
    echo "The shortest array length is $shortest. The longest array length is $longest";
}
$words =  array("abcd", "abc", "de", "hjjj", "g", "wer");
echo "<hr>";
long($words);
echo "<hr>";






// Write a PHP script to generate unique random 10 numbers within a specific range. 

// Sample Input: (11, 20)
// Sample Output: 17 16 13 20 14 19 18 15 11 12



function generateRandom($num1, $num2)
{

    for ($i = 0; $i < 10; $i++) {
        echo  random_int($num1, $num2) . "\t";
    }
}
echo "<hr>";
generateRandom(11, 20);
echo "<hr>";




// Write a PHP script that returns the lowest integer in the array  that is not 0. 

// Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
// Sample Output:  2         

function lowestNum($arr)
{
    sort($arr);
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] != 0) {
            return $arr[$i];
        }
    }
}

$array1 = array(2, 0, 10, 12, 6);
echo "<hr>";
echo "the lowest integer in the array  that is not 0 : " . lowestNum($array1);
echo "<hr>";




/**
 * loop
 */
#q1
// Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position. 
// Expected Output: 1-2-3-4-5-6-7-8-9-10




function displaysDash($arr)
{

    for ($i = 0; $i < count($arr); $i++) {
        if ($i < count($arr) - 1)
            echo $arr[$i] . "-";
        if ($i == count($arr) - 1)
            echo $arr[$i] . "\t";
    }
}
echo "<hr>";
echo "Q1 Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position. ";
displaysDash([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
echo "<hr>";





#q2
// Create a script using a for loop to add all the integers between 0 and 30 and display the total. 

// Expected Output:  total as a number 




function addNum()
{
    $sum = 0;
    for ($i = 0; $i < 30; $i++) {
        $sum += $i;
    }
    echo "sum = " . $sum;
}
echo "<hr>";
echo "Q2 Create a script using a for loop to add all the integers between 0 and 30 and display the total. ";
addNum();
echo "<hr>";



#Q3
// Create a script to generate the following pattern, using the nested for loop. 

// Expected Output:

// A A A A A 
// A A A B B 
// A A C C C 
// A D D D D 
// E E E E E
echo "<hr>";


for ($x = 1; $x <= 5; $x++) {
    for ($y = 1; $y <= 5; $y++) {
        if ($x == 1 || $x == 2 && $y <= 3 || $x == 3 && $y <= 2 || $x == 4 && $y <= 1) {
            echo "A";
        }
        if ($x == 2 && $y > 3) {
            echo "B";
        }
        if ($x == 3 && $y > 2) {
            echo "C";
        }

        if ($x == 4 && $y > 1) {
            echo "D";
        }
        if ($x == 5) {
            echo "E";
        }
        echo " ";
    }
    echo "\n";
}


echo "<hr>";






#Q4   
// Create a script to generate the following pattern, using the nested for loop. 

// Expected Output:

// 1 1 1 1 1 
// 1 1 1 2 2 
// 1 1 3 3 3 
// 1 4 4 4 4 
// 5 5 5 5 5

echo "<hr>";


for ($x = 1; $x <= 5; $x++) {
    for ($y = 1; $y <= 5; $y++) {
        if ($x == 1 || $x == 2 && $y <= 3 || $x == 3 && $y <= 2 || $x == 4 && $y <= 1) {
            echo "1";
        }
        if ($x == 2 && $y > 3) {
            echo "2";
        }
        if ($x == 3 && $y > 2) {
            echo "3";
        }

        if ($x == 4 && $y > 1) {
            echo "4";
        }
        if ($x == 5) {
            echo "5";
        }
        echo " ";
    }
    echo "\n";
}

echo "<hr>";



#Q5
// Create a script to generate the following pattern, using the nested for loop. 

// Expected Output:

// 1 0 0 0 0 
// 0 2 0 0 0 
// 0 0 3 0 0 
// 0 0 0 4 0 
// 0 0 0 0 5


echo "<hr>";


for ($x = 1; $x <= 5; $x++) {
    for ($y = 1; $y <= 5; $y++) {
        if ($x == $y) {
            echo $x;
        } else echo "0";
        echo " ";
    }
    echo "\n";
}

echo "<hr>";





#Q6
// Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.

// Sample Input: 5
// Expected Output: 120



echo "<hr>";
function factorial($num)
{
    $fact = 1;
    for ($x = 1; $x <= 5; $x++) {
        $fact *= $x;
    }
    echo "the factorial is $num : $fact";
}
factorial(5);
echo "<hr>";


#Q7

// Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 

// Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, …

function fibonacci($len)
{
    $num1 = 0;
    $num2 = 1;
    if ($len <= 0) {
        print("invalid input");
    }
    if ($len == 1) {
        print("Fibonacci sequence upto" . $len . ":" . $num1);
    }
    if ($len == 2) {
        print("Fibonacci sequence upto" . $len . ":" . $num1 . "," . $num2);
    }
    print("Fibonacci sequence upto" . $len . ":");
    for ($x = 0; $x <= $len; $x++) {
        print($num1 . ",\t");
        $fab = $num1 + $num2;
        $num1 = $num2;
        $num2 = $fab;
    }
}

echo "<hr>";
fibonacci(5);
echo "<hr>";


#Q8

// Write a program which will count the "c" characters in the text "Orange Coding Academy". 

// Sample Input: Orange Coding Academy
// Expected Output: 2



function countCinString($str)
{
    $count = 0;
    for ($i = 0; $i <= strlen($str); $i++) {
        if (strtolower(substr($str, $i, 1)) == 'c') {
            $count++;
        }
    }

    echo " C count = $count";
}
echo "<hr>";

countCinString("Orange Coding Academy");
echo "<hr>";



#Q9
// Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag. 
// 1 * 1 = 1
// 1 * 2 = 2
// 1 * 3 = 3
// 1 * 4 = 4
// 1 * 5 = 5
// 2 * 1 = 2
// 2 * 2 = 4
// 2 * 3 = 6
// 2 * 4 = 8
// 2 * 5 = 10
// 3 * 1 = 3
// 3 * 2 = 6
// 3 * 3 = 9
// 3 * 4 = 12
// 3 * 5 = 15
// 4 * 1 = 4
// 4 * 2 = 8
// 4 * 3 = 12
// 4 * 4 = 16
// 4 * 5 = 20
// 5 * 1 = 5
// 5 * 2 = 10
// 5 * 3 = 15
// 5 * 4 = 20
// 5 * 5 = 25
// 6 * 1 = 6
// 6 * 2 = 12
// 6 * 3 = 18
// 6 * 4 = 24
// 6 * 5 = 30


function createTable()
{
    echo "<table style=\"padding:100px,  border-spacing: 0px\" >";
    for ($i = 1; $i <= 6; $i++) {

        for ($j = 1; $j <= 5; $j++) {
            echo "<tr>";
            echo "<td>" . "$i * $j = " . $i * $j . "</td>";

            echo "</tr>";
        }
    }
    echo "</table>";
}
echo "<hr>";
createTable();
echo "<hr>";







#Q10
// Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number,
//  and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".

// Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz …….





function fizzBuzz()
{
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "fizzBuzz \t";
        } elseif ($i % 3 == 0) {
            echo "fizz \t";
        } elseif ($i % 5 == 0) {
            echo "Buzz \t";
        } else {
            echo $i . "\t";
        }
    }
}
echo "<hr>";
fizzBuzz();
echo "<hr>";



#Q11
// Write a PHP program to generate and display the first n lines of a Floyd triangle

// According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers,
//  used in computer science education. It is named after Robert Floyd. 
// It is defined by filling the rows of the triangle with consecutive numbers, starting with a 1 in the top left corner:

// Sample output:
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15
function  floydTriangle($n)
{
    $num = 1;
    for ($x = 1; $x <= $n; $x++) {
        for ($y = 1; $y <= $x; $y++) {
            echo $num++;
            if ($y < $x) {
                echo " ";
            }
        }
        echo "\n";
    }
}

echo "<hr>";
floydTriangle(5);
echo "<hr>";



#Q12
// Write a PHP program to print the following pattern. 

// Expected Output:

//      A 
//     A B 
//    A B C 
//   A B C D 
//  A B C D E 
//   A B C D 
//    A B C 
//     A B 
//      A

$arr = range('A', 'E');
echo"<hr>";
print_pattern($arr,5);
echo"<hr>";
function print_pattern(&$arr,$size){

for ($i = 1; $i <= $size; $i++) {
    $char = $arr[0];
    for ($j = $size; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 0; $k < $i * 2 - 1; $k++, $char++) {
        echo $char;
    }
    echo "<br>";
}
for ($i = 1; $i <= $size - 1; $i++) {
    $char = $arr[0];
    for ($j = 0; $j < $i; $j++) {
        echo " ";
    }
    for ($k = ($size - $i) * 2 - 1; $k > 0; $k--, $char++) {
        echo $char;
    }
    echo "<br>";
}
}






// Functions


#Q1
// Write a PHP script to check if the inserted number is a prime number 

// Sample Input:  3
// Expected Output: 3 is a prime number 




function test_prime($n)
{
    if ($n === 1) {
        return "$n is not a prime number ";
    } elseif ($n === 2) {
        return "$n is a prime number ";;
    } else {
        for ($x = 2; $x <= sqrt($n); $x++) {
            if ($n % $x === 0 && $x != $n) {
                return  "$n is not a prime number ";
            }
        }
        return  "$n is a prime number ";
    }
}
echo "<pre>";
echo test_prime(8);
echo "<br>";
echo test_prime(6);
echo "<br>";
echo test_prime(3);
echo "<br>";
echo test_prime(10);
echo "<br>";
echo test_prime(11);
echo "</pre>";




#Q2 
// Write a PHP script to reverse a string 
// Sample Input:  remove
// Expected Output: evomer
$str = "remove";
echo Strrev($str);


#Q3
//  Write a PHP script to check if the all string characters are lower cases

// Sample Input:  remove
// Expected Output: Your String is Ok 

echo "<pre>";
$str = "remove";
if (ctype_lower($str)) {
    echo "Your String is Ok ";
} else
    echo "Your String is NOT Ok ";

echo "</pre>";


/* Q4
 Write a PHP function to swap to variables?
 
Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10 
 */


// Using list() method –
function swap($x, $y)
{
    return list($x, $y) = array($y, $x);
}

//compact() method create array containing variables and their values.

function swap2($x, $y)
{
    $temp = $x;
    $x = $y;
    $y = $temp;
    return compact('x', 'y');
}


echo "<pre>";
print_r(swap(2, 10));
echo "<hr>";
print_r(swap2(2, 10));

echo "</pr,e>";



/*Q6
*Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.
 
        Sample Input:  407
        Expected Output: 407 is Armstrong Number 
 */
function isArmstrong($num)
{
    //     $count=1;
    //     while($num/10>1){
    //         $count++;
    //        $num=$num/10;
    //     }
    // echo $count; 
    $armNum = 0;

    $digits = (string)$num;
    for ($i = 0; $i < strlen($digits); $i++) {
        $armNum += pow($digits[$i], strlen($digits));
    }
    if ($armNum == $num) {
        print_r("is Armstrong Number\n");
    } else {
        print_r("is Not Armstrong Number \n");
    }
}

isArmstrong(407);


#Q7
/*
  
Write a PHP function that checks whether a passed string is a palindrome or not?
Sample Input:  Eva, can I see bees in a cave?
Expected Output: Yes it is a palindrome 
  
*/

function isPalondrome($text)
{
    // echo preg_replace("/\s+||\W+/", "", $text);echo "<br>";  echo preg_replace("/\s+||\W+/", "",Strrev($text));
    //    echo str_replace (' ','', Strrev($text));echo "<br>";
    //    echo str_replace (' ','',$text); strcmp("Hello world!","Hello world!") 

    if (strcmp(
        Strtolower(
            preg_replace("/\s+||\W+/", "", $text)
        ),
        Strtolower(
            preg_replace("/\s+||\W+/", "", Strrev($text))
        )
    )) {
        print_r("Yes it is a palindrome \n");
    } else {
        print_r("No it is NOT a palindrome \n");
    }
}

isPalondrome("Eva, can I see bees in a cave");





/* #Q8
    Write a PHP function to remove duplicates from an array ?
    
    Sample Input:  
    $array1 = array(2, 4, 7, 4, 8, 4);
    
    Expected Output:
    $array1 = array(2, 4, 7, 8);
 
 */

$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = array_unique($array1);

print_r($array1);
?>