<html>
<head>

<title></title>
<link rel="stylesheet" href="record.css">
</head>

<body>

<?php

 $server = "localhost";
 $username = "root";
 $password = "";

 $con = mysqli_connect($server, $username, $password);
 if(!$con){
    die("connection to the database failed due to ".mysqli_connect_error());
}

else{
    echo "<h3> Sucess to db </h3>";
}


 $Name= $_POST['Username'] ;
 $Password = $_POST['myPassword'];
 $Phone =  $_POST['Contact_no'];
 $Email= $_POST['Email_Id'];
 $CITY =  $_POST['City']; 
 $PINCODE= $_POST['Pincode'] ;
 $STATE= $_POST['State'];
 $COUNTRY =  $_POST['Country'];
 
$sql=" INSERT INTO `coronavirus`.`signup` (`Sn`, `First_Name`, `Last_Name`, `Contact`, `Mail`, `City`, `Pincode`, `State`, `Country`, `Date`) VALUES (NULL, '$Name', '$Password', '$Phone', '$Email', '$CITY', '$PINCODE', '$STATE', '$COUNTRY', current_timestamp());";


if($con->query($sql) == true){
    include 'checking3.php';
}

else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
?>
</body>
</html>


