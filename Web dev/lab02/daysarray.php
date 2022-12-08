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
/* use of abs() and pow() built in functions, and echo statement. */
$days = array ('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
echo "<p>The days of the week in English are: </p>";
for($x = 0; $x < sizeof($days); $x += 1){
    echo $days[$x].', ';
}
$days[0] = 'Lundi';
$days[1] = 'Mardi';
$days[2] = 'Mercredi';
$days[3] = 'Jeudi';
$days[4] = 'Vendredi';
$days[5] = 'Samedi';
$days[6] = 'Dimanche';
echo "<p>The days of the week in French are: </p>";
for($x = 0; $x < sizeof($days); $x += 1){
    echo $days[$x].', ';
}
?>
</body>
</html>

