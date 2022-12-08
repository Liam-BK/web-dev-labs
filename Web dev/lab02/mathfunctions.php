<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" >
<head>
<meta http-equiv= content-type content= text/html; charset=utr-8 />
<meta name="description" content="Web Development :: Lab 1" />
<meta name="keywords" content="Web,development" />
<title>My first web page</title>
</head>
<body>
<?php
function factorial ($n){
    $result = 1;
    $factor = $n;
    while($factor > 1){
        $result = $result * $factor;
        $factor--;
    }
    return $result;
}
?>
</body>
</html>
