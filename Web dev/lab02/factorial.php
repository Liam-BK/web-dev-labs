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
include 'mathfunctions.php';
include 'factorialform.html';
print_r($_GET);
if(isset($_GET['input'])){
    echo factorial($_GET['input']);
}
?>
</body>
</html>
