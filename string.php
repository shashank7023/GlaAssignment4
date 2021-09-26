<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpImplement</title>
</head>
<body style="background-color:blue">
    <h1 style="color:red;text-align:center">Solution of first page</h1>
    <div style="margin:10%; font-size:larger">
        

<?php
$string = $_POST['string'];
echo "$string";

$string_to=$_POST['string_to'];

$firstfunction=md5($string);
echo " this function Calculate the MD5 hash of the string"."$firstfunction";
echo "<br>";


$numberformat=number_format($string);
echo "this is convert to number format"."$numberformat";
echo "<br>";

$ord_function=ord($string);
echo "this function return the ascii value "."$ord_function";
echo "<br>";

$rtrim_function=rtrim($string,"world");
echo "only you can use the hello world "."$rtrim_function";
echo "<br>";

$str_replacefun=str_replace("world" , "shashank" ,$string);
echo "only you can use hello world "."str_replace";



$lengthfunction=strlen($string);
echo " this is length string "."$lengthfunction";
echo "<br>";

$strcase_cmp_fun=strcasecmp($string ,$string_to);
echo "this function compare the string to another string "."$strcase_cmp_fun";
echo "<br>";

$strrpos_fun=strrpos($string ,"world");
echo "only you can input hello world "."$strrpos_fun";
echo "<br>";

$Substr_fun=substr($string , 6);
echo "this function return the substring "."Substr_fun";
echo "<br>";

$str_tolower_fun=strtolower($string);
echo "this function convert string to loewr case letter string "."$str_tolower_fun";
echo "<br>";

$bintohex_fun=bin2hex($string);
echo "this function Convert string to hexadecimal values "."$bintohex_fun";
echo "<br>";

$chop_fun=chop($string ,"world");
echo "this function Remove characters from the right end of a string "."$chop_fun";
echo "<br>";

?>
    </div>
</body>
</html>



