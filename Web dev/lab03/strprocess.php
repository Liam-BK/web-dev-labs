<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Using string functions</title>
</head>
<body>
<h1>Web Development – Lab03</h1>
<?php
if(isset($_POST["data"]) && strlen($_POST["data"]) > 0){
    $str = $_POST["data"];
    $pattern = "/^[A-Za-z ]+$/";
    if(preg_match($pattern, $str)){
        $ans = "";
        $len = strlen($str);
        for($i = 0; $i < $len; $i++){
            $letter = substr($str, $i, 1);
            if(!($letter == 'a' || $letter == 'A' || $letter == 'e' || $letter == 'E' || $letter == 'i' || $letter == 'I' || $letter == 'o' || $letter == 'O' || $letter == 'u' || $letter == 'U') || $letter == ' '){
                $ans = $ans . $letter;
            }
        }
        echo "the word after removing vowels is ", $ans . "<br>";
    }
    else{
        echo "please enter a string with only letters or space.<br>";
    }
}
else{
    echo "please enter a string from the input form.<br>";
}
?>
</body>
</html>
<!--http://prq2929.cmslamp14.aut.ac.nz/lab03/strprocess.php-->
