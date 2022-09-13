<!DOCTYPE HTML>
<html>

<body>

    <form action='first.php' method="post">
        Name: <input type="text" name="&Name"><br><br>
        E-mail: <input type="text" name="&email"><br>
        <input type="submit">
    </form>


    <?php
    $username = $_GET['&Name'];
    echo "hello    ".$username."<br>";
    $Email=$_GET['&email'];
    echo "your email is \t".$Email;
    



    
    ?>

</body>




</html>