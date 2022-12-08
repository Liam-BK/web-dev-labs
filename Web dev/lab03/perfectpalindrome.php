<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>palindrome form</title>
</head>
<body>
<h1>Web Development - Lab03</h1>
<?PHP
if(isset($_POST["palindrome"]) && strlen($_POST["palindrome"]) > 0){
    $str = $_POST["palindrome"];
    $revstr = strrev($str);
    if(str_replace(' ', '', strtolower($str)) != $str){
        if(str_replace(' ', '', preg_replace('/\p{P}/', '', strtolower($str))) == str_replace(' ', '', preg_replace('/\p{P}/', '', strtolower($revstr)))){
            echo $str . " is a standard palindrome.<br>";
        }
        else{
            echo $str . " is not a palindrome.<br>";
        }
    }
    else{
        if($str == $revstr){
            echo $str . " is a perfect palindrome.<br>";
        }
        else{
            echo $str . " is not a palindrome.<br>";
        }
    }
}
?>
</body>
</html>
<!--http://prq2929.cmslamp14.aut.ac.nz/lab03/perfectpalindrome.php-->
