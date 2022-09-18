<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo "Practice " ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <?php

    print "yasmen " . "<br>";
    echo "More than line "; //not sensetive about charcter ;



    ?>
    <!-- // if a bage just php you can not write  close "pure php " -->


    <?php echo "

<h1 class=\"cl\">Home page</h1>

" ?>
    <!-- you can uase single code with \\\\\scape operater \" \; -->

    <h1><?php echo "this is hadding by php" ?></h1>


   

    <?php

    $_name = "Yasmen"; //لازم ما يبلش برقم اورمز خاص او كلمة محجوزة او يحتوي ع فراغ 
    // decleration by $ verean=ble name assigment operater= vervalue 
    $age = 25;
    $CityCountry = "jordan"; //camelcase or use under case_;
    $Firstname = $_name;
    echo "My name is \"\" $_name  and im age $age";
    $language = "<li>html</li>";
    $language .= "<li>css</li>";
    $language .= "<li>C++</li>";
    // $language=$language1+$language2 commint by use single // or milteline /**/  nisted commint with same type is in ligle * or use #/ 

    $word = "concatination";
    $wellcomemassage = "wellcome " . "   " . $_name;




   
    ?>
    <!-- we use dot to concatination "." -->


    <h1><?php echo "wellcome `$Firstname` Im happy to see you" ?></h1>
    <h2><?php echo $wellcomemassage ?></h2>
    <h2><?php echo $word . " " . "this word concatination" . 10.22 ?></h2>
    <h2>i learn this language </h2>
    <ol>
        <?php echo $language ?>
    </ol>



    <!-- Type the var use getttype or var_dump  -->

    <?php
    $var1 = "Turkyeh";
    $flag = true;

    $ar = array(
        "A" => "Ahmaed",
        "B" => "Reem",
        "C" => "Maya"
        //array(Key =>value,)
        // 
echo"my name is $var1";//بيبطبع المتغير 
echo 'my name is $var1';//لا يتغرف على المتغير بيطبغو string


    );

    $var2 = NULL;

    class book
    {
        function Book()
        {
            $this->genre = "History";
        }
    }

    $var3 = new book();

    echo "<h1>Get Type</h1>";
    echo gettype($var1) . "<br>";
    echo var_dump($var1) . "<br>"; //string 
    echo gettype($age) . "<br>"; //nummber
    echo var_dump($age) . "<br>";
    echo gettype($flag) . "<br>"; //bollean
    echo var_dump($flag) . "<br>";
    echo gettype(10.22) . "<br>"; //float or duble 
    echo var_dump(20.00) . "<br>";
    echo gettype($ar) . "<br>";
    echo var_dump($ar) . "<br>"; //array 

    echo gettype($var2) . "<br>";
    echo var_dump($var2) . "<br>"; //NUll

    echo gettype($var3) . "<br>"; //object
    echo var_dump($var3) . "<br>"; // resource 
    ?>

    <!-- Constant  -->
    <?php
    $fir = "yasmen"; //variable 

    echo $fir . "<br>";


    // consant syntax= (name /value,case sensitive true or false);







    ?>

    <?php

    define("SITE_STATE", false, false);
    if (SITE_STATE == true) {
        $var8 = "Qamar";
        echo $var8;
        $var8 = "MOna";
        echo $var8;


        define("var8", "NOOR", false); //global can coll in any where 
        // const var10="false";
        // you cant change the value 

        // false we min the constant is sensitive else "true not sensitive 
        echo var8;
        
        // Magic constant 
        echo PHP_INT_MAX . "<br>"; //اكبر رقم integer 

        echo __FILE__; //المسار الموجود في الملف 
        echo __DIR__; //director مسار الملق 
        echo __LINE__; //السطر الي عم اشتغل عليه 

    } else {


        echo "the sity close to maintance";
    }

    ?>


    <!-- CONDITion  -->
    <?php
    $num1 = 100;
    $num2 = 200;
    if ($num1 > $num2) {

        echo "<br>" . "num1 greater than num2";
    } else {
        echo "<br>" . "num2 greater than num1";
    }


    // phpinfo();//ialll information in php

    ?>
    <?="<br>i love yasmen short hand  " ?>



    <?php
 echo 10+"20"."<br>";
 echo gettype(10+"20")."<br>";//التحويل الاوتمتيكي للقيمو الراجعة 
 echo gettype("10"+"20") ;
 echo gettype("10"+"20")."<br>";
 echo gettype(10+"20 Osama ")."<br>";//30 warring
  
//Type  custing 


echo gettype(10+(int)"20 Osama ")."<br>"; //convert to integer  
echo gettype(10+(integer)"20 Osama ")."<br>";  

echo (10+(int)20.20)."<br>";
echo gettype(10+(int)20.20)."<br>";  //int

echo (10.80+20.20)."<br>";//int
echo gettype(10.80+20.20)."<br>";//double
echo(int)(10.80+20.20)."<br>";
echo(string)("10.80"+"20.20")."<br>";
  
  


// var_dump بتعطي البيانات بشكل تفصيلي وبتطبغ بشكل مباشر بدون echo

var_dump((bool)"");//false 0 Null
var_dump((bool)[]);
var_dump((bool)array());

var_dump((bool)"1");//any number is true
var_dump((bool)"reeb");
var_dump((bool)array("name"=>1));
var_dump((bool)-10.20);//false 0 Null



  ?>


<?php

  echo nl2br("im 
     write 
     a coomint here 
     in multible line by 
     using nl2br()nfunction ");//الطباعه كل شي ع سطر خاص 



    //  here doc and now doc

//double code  and parcing مترجم اللغة بحلل كل شي 2\\ return value
    // Hello لتقليل الscaping 
         //its optional " " 
echo"<br>";
    echo<<< HereDoc
    special $$$ '' '"" \\\\
    THIS HEREDOC ""$age
    
    HereDoc;

//single cody  parcing 4\\ return string not return value

echo<<<'newdoc'
hello evry body \\\\
$age 

newdoc;




?>




</body>

</html>