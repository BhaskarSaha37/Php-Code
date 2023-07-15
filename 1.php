<!doctype html>
<html>
    <body>
        
         <h1> Summation of two numbers </h1>
        <a href="https://tryphp.w3schools.com/showphp.php?filename=demo_global_get">TEST</a>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
        <?php
        $a = 20;
        $b= 30;
        function Test()
        {
              $z=5175;
              echo "My Bike number is: $z <br>";
         $GLOBALS['a']=$GLOBALS['a']+$GLOBALS['a'];            
        }
        function statr()
        {
            static $e=34;
            echo "Incremental Value is $e <br>";
            $e++;
        }
        $c= $a+$b;
        echo "The sum of $a and $b is: $c <br>";
        Test();
        echo "Global Value: $a <br>";
         $c= $a+$b;
        echo "The sum of $a and $b is: $c <br>";
        statr();
        statr();
        statr();
        $cars = array("Apache","Yahama","Bajaj","Hero","Honda");
        //var_dump($cars);
        var_export($cars);
        echo "<br>";
        echo $_SERVER['REQUEST_METHOD'];
        echo"<br>";
        echo(date("l"));
        echo"<br>";


/*if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
  
        ?>
    </body>
    </html>