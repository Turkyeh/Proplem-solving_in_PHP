<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo"HW answer"?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

<h1>Functions</h1>
<p>1.Write a PHP script to check if the inserted number is a prime number 
 
Sample Input:  3
Expected Output: 3 is a prime number 
</p>
<br>
<?php
class IsPrime
{       
    function check($num)
    {
        for ($i = 2; $i < $num; $i++)
        {
            if ($num % $i == 0) 
            {
                echo 'NOT prime';
                break;
            }               
        }
        echo 'Prime';           
    }       
}

$x = new IsPrime();
$x->check(3);?>


<hr>
<p>2.Write a PHP script to reverse a string 

Sample Input:  remove
Expected Output: evomer
</p>


<?php
// PHP program to reverse a string using strrev()

function Reverse($str){
    return strrev($str);
}

// Driver Code
$str = "remove";
echo Reverse($str)
?>


<hr>

<p>3. Write a PHP script to check if the all string characters are lower cases

Sample Input:  remove
Expected Output: Your String is Ok </p>




<?php
// PHP program to check if a string has all
// lower case characters

$strings = array('remove');

// Checking for above three strings one by one.
foreach ($strings as $testcase) {
 if (ctype_lower($testcase)) {
  echo "Your String is Ok\n";
 } else {
  echo "No\n";
 }
}
?>







<hr>

<p>4.5.Write a PHP function to swap to variables?

Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10 

</p>

<?php
$a = 12;
$b = 10;
echo "\nBefore swapping:  ". $a . ',' . $b;
list($a, $b) = array($b, $a);
echo "\nAfter swapping:  ". $a . ',' . $b."\n";
?>


<hr>


<p>6. 
Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.

</p>
<!-- لعدد النرجسي أو عدد ارمسترونغ أو عدد ثابت كامل رقميا (بالإنجليزية: perfect digital invariant)‏ أو مثالي زائد (بالإنجليزية: plus perfect number)‏ ذا عدد أرقام: n هو عدد يساوي مجموع أرقامه مرفوعة إلى n على حدة.( وهو يختلف عن العدد كابريكار و العدد مونتشهاوزن) مثلا :

153 = 1³+5³+3³ -->


<?php
function armstrong_number($n) {
$sl = strlen($n);
  $sum = 0;
  $n = (string)$n;
  for ($i = 0; $i < $sl; $i++) {
    $sum = $sum + pow((string)$n{$i},$sl);
  }
  if ((string)$sum == (string)$n) {
    return "True";
  } else {
    return "False";
  }
}
echo "Is 153 Armstrong number? ".armstrong_number(153);
?>


<hr>

<p> 7.
Write a PHP function that checks whether a passed string is a palindrome or not?
Sample Input:  Eva, can I see bees in a cave?
Expected Output: Yes it is a palindrome
</p>

    
    </body>
</html>