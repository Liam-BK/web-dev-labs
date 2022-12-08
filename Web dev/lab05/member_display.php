<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>add member</title>
</head>
<body>
<h1>Web Development - Lab05</h1>

<?php
require_once ("/home/prq2929/public_html/lab05/settings.php");
$conn = mysqli_connect($host, $user, $pswd, $dbnm);
if(!$conn){
    echo "Connection failed" . "<br>";
}
else{
    $sql = "SELECT * FROM vipmember;";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<table>";
            echo "<tr>";
            echo "<td>", "ID: " . $row["member_id"] . ",", "</td>";
            echo "<td>", "first name: " . $row["fname"] . ",", "</td>";
            echo "<td>", "last name: " . $row["lname"] . ",", "</td>";
            echo "<td>", "email: " . $row["email"] . ",", "</td>";
            echo "<td>", "phone: " . $row["phone"] . ",", "</td>";
            echo "</tr>";
            echo "</table>";
        }
    }
    else{
        echo "0 rows";
    }
    echo "<br>";
}
mysqli_close($conn);
?>
<a href="http://prq2929.cmslamp14.aut.ac.nz/lab05/vip_member.php">Home</a>
</body>
</html>
<!--http://prq2929.cmslamp14.aut.ac.nz/lab05/member_display.php-->
