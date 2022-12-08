<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" >
<head>
<meta http-equiv= content-type content= text/html; charset=utr-8 />
<meta name="description" content="Web Development :: Lab 1" />
<meta name="keywords" content="Web,development" />
<title>My first web page</title>
</head>
<body>
<h1> Web Development Lab 2</h1>
<?php
$var = 12;
if(is_int($var)){
    echo "<p>variable $var is an integer</p>";
    if($var % 2 == 0){
        echo "<p>variable $var is even</p>";
    }
    else{
        echo "<p>variable $var is odd</p>";
    }
}
else{
    echo "<p>variable $var is not an integer</p>";
}

?>
</body>
</html>
