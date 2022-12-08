<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>add member</title>
</head>
<body>
<h1>Web Development - Lab05</h1>
<form action="/lab05/member_add.php" method="post"><br>
    <label for="fname">first name</label><br>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">last name</label><br>
    <input type="text" id="lname" name="lname"><br><br>
    <label for="gender">gender</label><br>
    <input type="text" id="gender" name="gender"><br><br>
    <label for="email">email</label><br>
    <input type="text" id="email" name="email"><br><br>
    <label for="phone">phone number</label><br>
    <input type="text" id="phone" name="phone"><br><br>
    <input type="submit" value="Submit">
</form>
<!--<a href="http://prq2929.cmslamp14.aut.ac.nz/lab05/member_add_form.php">Add new member form</a>-->
<!--<a href="http://prq2929.cmslamp14.aut.ac.nz/lab05/member_display.php">display all members</a>-->
<!--<a href="http://prq2929.cmslamp14.aut.ac.nz/lab05/member_search.php">search members</a>-->
<a href="http://prq2929.cmslamp14.aut.ac.nz/lab05/vip_member.php">Home</a>

<?php
//  require_once ("/home/prq2929/public_html/lab05/settings.php");  //please make sure the path is correct
// $conn = mysqli_connect($host, $user, $pswd, $dbnm);
//if(!$conn){
//    echo "Connection failed" . "<br>";
//}
//else{
//    echo "connection established" . "<br>";
//}

//$sql = "SELECT `Car_ID`, `Make`, `Model`, `Price` FROM Car";

//$result = mysqli_query($conn, $sql);
//
//$bool_val = (bool)$result;
//
//echo $bool_val;
//
//if(mysqli_num_rows($result) > 0){
//    while($row = mysqli_fetch_assoc($result)){
////        echo "ID: " . $row["Car_ID"]. ", Make: " . $row["Make"]. ", Model: " . $row["Model"]. ", Price: " . $row["Price"]. "<br>";
//        echo "<table>";
//        echo "<tr>";
//        echo "<td>", $row["Car_ID"], "</td>";
//        echo "<td>", $row["Make"], "</td>";
//        echo "<td>", $row["Model"], "</td>";
//        echo "<td>", $row["Price"], "</td>";
//        echo "</tr>";
//        echo "</table>";
//    }
//}
//else{
//    echo "0 rows";
//}
//
//mysqli_close($conn);
//echo $result . "<br>";
    // complete your answer here
 
?>
</body>
</html>
<!--http://prq2929.cmslamp14.aut.ac.nz/lab05/member_add_form.php-->
