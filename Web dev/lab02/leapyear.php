<!DOCTYPE html>
<html>
<head>
<title>PHP Functions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h1>Use of PHP built in functions</h1>
<?php
include 'leapyearform.html';
$year = 1900;
function check_for_leapyear($n){
    $is_leapyear = "false";
    $var = $n;
        if(is_numeric($var)){
            if($var % 100 == 0){
                if($var % 400 == 0){
                    $is_leapyear = "true";
                }
            }
            else{
            if($var % 4 == 0){
                $is_leapyear = "true";
            }
        }
    }
    return $is_leapyear;
}
if(isset($_GET['input'])){
    $isleapyear = check_for_leapyear($_GET['input']);
    if($isleapyear == "true"){
        echo $_GET['input'] , " is a leap year.";
    }
    else{
        echo $_GET['input'] , " is a standard year.";
    }
    unset($_GET['input']);
//    echo check_for_leapyear($_GET['input']);
}
//echo $year , " is a leap year: ";
//echo check_for_leapyear($year);
?>
</body>
</html>
