<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>add member</title>
</head>
<body>
<h1>Web Development - Lab05</h1>
<!--<a href="http://prq2929.cmslamp14.aut.ac.nz/lab05/member_add_form.php">Add new member form</a>-->
<!--<a href="http://prq2929.cmslamp14.aut.ac.nz/lab05/member_display.php">display all members</a>-->
<!--<a href="http://prq2929.cmslamp14.aut.ac.nz/lab05/member_search.php">search members</a>-->
<a href="http://prq2929.cmslamp14.aut.ac.nz/lab05/vip_member.php">home</a>

<br>
<?php
require_once ("/home/prq2929/public_html/lab05/settings.php");  //please make sure the path is correct

function addvip($conn){
    $sql="CREATE TABLE IF NOT EXISTS vipmember(
    member_id int,
    fname varchar(40),
    lname varchar(40),
    gender varchar(1),
    email varchar(40),
    phone varchar(20)
    );"
    ;
    mysqli_query($conn, $sql);
    echo "check";
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    mysqli_query($conn,"INSERT INTO `vipmember`(`fname`, `lname`, `gender`, `email`, `phone`) VALUES ('$fname','$lname','$gender','$email','$phone')");
    }

    $conn = mysqli_connect($host, $user, $pswd, $dbnm);
    if(!$conn){
        echo "Connection failed" . "<br>";
    }
    else{
        echo "Connection established" . "<br>";
        addvip($conn);
//        $sql = "SELECT * from `vipmember`;";
//        $result = mysqli_query($conn, $sql);
//        if(mysqli_num_rows($result) > 0){
//    //        addvip($conn);
//            echo $result;
//            while($row = mysqli_fetch_assoc($result)){
//                echo "ID: " . $row["member_id"]. ", first name: " . $row["fname"]. ", last name: " . $row["lname"]. ", gender: " . $row["gender"]. ", email: " . $row["email"]. ", phone: " . $row["phone"]. "<br>";
//            }
//        }
//        else{
//            echo "0 rows";
////            $sql="CREATE TABLE IF NOT EXISTS vipmember(
////            member_id int,
////            fname varchar(40),
////            lname varchar(40),
////            gender varchar(1),
////            email varchar(40),
////            phone varchar(20)
////            );"
////            ;
//
////        $result = mysqli_query($conn, $sql);
//            addvip($conn);
//
//            $sql = "SELECT * from `vipmember`";
//            $result = mysqli_query($conn, $sql);
//            echo $result;
//            while($row = mysqli_fetch_assoc($result)){
//                echo "ID: " . $row["member_id"]. ", first name: " . $row["fname"]. ", last name: " . $row["lname"]. ", gender: " . $row["gender"]. ", email: " . $row["email"]. ", phone: " . $row["phone"]. "<br>";
//            }
//        }
        mysqli_close($conn);
    }
?>
<a href="http://prq2929.cmslamp14.aut.ac.nz/lab05/vip_member.php">Home</a>
</body>
</html>
<!--http://prq2929.cmslamp14.aut.ac.nz/lab05/member_add.php-->
