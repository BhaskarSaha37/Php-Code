<!doctype html>
<html>
<body>
<?php
$txt = "Saha";
echo "Bhaskar $txt";
echo "<br> Total length of the string is:- ";
echo strlen ("Bhaskar $txt");
echo "<br> Total word in the string is:- ";
echo str_word_count ("Bhaskar $txt");
echo "<br> Reverse string is:- ";
echo strrev ("Bhaskar $txt");
echo "<br> String position is:- ";
echo strpos ("Bhaskar $txt", "Sa");
echo "<br> String Replace:- ";
echo str_replace ("Saha","Das","Bhaskar $txt");
echo "<br>Value of pi is:- ";
echo(pi());
echo "<br>Value of minimum number is:- ";
echo(min(0, 150, 30, 20, -8, -200));
echo "<br>Value of maximum number is:- ";
echo(max(0, 150, 30, 20, -8, -200));
echo "<br>Square root of the number is:- ";
echo(sqrt(64));
echo "<br>Round of the number is:- ";
echo(round(0.59));
echo "<br>Random number is:- ";
echo rand(10,25);
echo "<br> Print using define function:-";
define("abc","Bhaskar");
echo abc;
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
?>
</body>
</html>