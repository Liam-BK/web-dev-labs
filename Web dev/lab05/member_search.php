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
    echo "connection established" . "<br>";
    $searchValue = $_POST["search"];
    if(is_numeric($searchValue) == 1){
        echo "invalid search query<br>";
    }
    else{
        $sql = "SELECT * FROM vipmember WHERE lname = '" . $searchValue . "';";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "ID: " . $row["member_id"] . ", First name: " . $row["fname"] . ", Last name: " . $row["lname"] . ", Gender: " . $row["gender"] . ", Email: " . $row["email"] . ", Phone: " . $row["phone"] . "<br>";
        }
    }
}
?>
<a href="http://prq2929.cmslamp14.aut.ac.nz/lab05/member_search_form.php">search different member</a><br>
<a href="http://prq2929.cmslamp14.aut.ac.nz/lab05/vip_member.php">Home</a>
</body>
</html>
<!--http://prq2929.cmslamp14.aut.ac.nz/lab05/member_search.php-->
