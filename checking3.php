<html>
<head>

<title>patient data</title>
 <link rel="stylesheet" href="record.css">
</head>

<body> 
  <h1> RECORD OF COVID PATIENT OF DELHI </h1>
  <h2> AIIMS DELHI<h2>
<table border="3" align="center" class="odd">
    <caption>  Patient information </caption>
    <tr>
    <th>ID</th>
    <th>FIRST_NAME</th>
    <th>LAST_NAME</th>
    <th>AGE</th>
    <th>GENDER</th>
    <th>CONTACT_NO</th>
    <th>DOB</th>
</tr>

<?php
// error_reporting(0);
 include 'checking2.php';
 $query= " SELECT * FROM aiims_delhi_patinfo";
$data = mysqli_query($con,$query);
$total= mysqli_num_rows($data); 
$result = mysqli_fetch_assoc($data);



 
if($total!=0)
$result = mysqli_fetch_assoc($data);
while($result=mysqli_fetch_assoc($data))

{
    echo "
<tr>
<td>".$result['ID']."</td>
<td>".$result['FIRST_NAME']."</td>
<td>".$result['LAST_NAME']."</td>
<td>".$result['AGE']."</td>
<td>".$result['GENDER']."</td>
<td>".$result['CONTACT_NO']."</td>
<td>".$result['DOB']."</td>
</tr>
";
}

// else
// {
//     echo "no records found";
// }

// {
//     echo "table has records";

// }
// else
// {
//     echo "no records found";
// }
?>



</table>
<table border="3"  align="center">
<caption><br/> Patient Data </caption>

<tr>
    <th>ID</th>
    <th>DATE_OF_ADMISSION</th>
    <th>SYMPTOMP_FEVER</th>
    <th>SYMPTOMP_DRYCOUGH</th>
    <th>SYMPTOMP_TIREDNESS</th>
    <th>SYMPTOMP_LOSS_TASTE_AND_SMELL</th>
    <th>SYMPTOMP_OTHER</th>
    <th>DATE_OF_DISCHARGE_DEATH</th>
    <th>OTHER_DISEASES</th>
    <th>HEMOGLOBIN_COUNT</th>
    <th>CONDITIONS</th>
    <th>STATUS_NOW</th>
    <th>VACINNATION_1</th>
    <th>VACINNATION_2</th>
    <th>NO_OF_DAYS</th>
    <th>EXPENDATURE_perday</th>
    <th>TOTAL</th>
</tr>

<?php

 include 'checking2.php';
 $query= " SELECT * FROM aiims_delhi_patdata";
$data = mysqli_query($con,$query);
$total= mysqli_num_rows($data); 
$result = mysqli_fetch_assoc($data);
if($total!=0)
$result = mysqli_fetch_assoc($data);
while($result=mysqli_fetch_assoc($data))

{
    echo "
<tr>
<td>".$result['ID']."</td>
<td>".$result['DATE_OF_ADMISSION']."</td>
<td>".$result['SYMPTOMP_FEVER']."</td>
<td>".$result['SYMPTOMP_FEVER']."</td>
<td>".$result['SYMPTOMP_TIREDNESS']."</td>
<td>".$result['SYMPTOMP_LOSS_TASTE_AND_SMELL']."</td>
<td>".$result['SYMPTOMP_OTHER']."</td>
<td>".$result['DATE_OF_DISCHARGE_DEATH']."</td>
<td>".$result['OTHER_DISEASES']."</td>
<td>".$result['HEMOGLOBIN_COUNT']."</td>
<td>".$result['CONDITIONS']."</td>
<td>".$result['STATUS_NOW']."</td>
<td>".$result['VACINNATION_1']."</td>
<td>".$result['VACINNATION_2']."</td>
<td>".$result['NO_OF_DAYS']."</td>
<td>".$result['EXPENDATURE_perday']."</td>
<td>".$result['TOTAL']."</td>

</tr>
";
}

?>



</table>

<br><br>
<h2>BATRA HOSPITAL</h2>
<table border="3" align="center">
<caption>  Patient information </caption>
   
<tr>

    <th>ID</th>
    <th>FIRST_NAME</th>
    <th>LAST_NAME</th>
    <th>AGE</th>
    <th>GENDER</th>
    <th>CONTACT_NO</th>
    <th>DOB</th>
</tr>
<?php
 
 include 'checking2.php';
 $query= " SELECT * FROM batra_hospital_patinfo";
$data = mysqli_query($con,$query);
$total= mysqli_num_rows($data); 
$result = mysqli_fetch_assoc($data);




 
if($total!=0)
$result = mysqli_fetch_assoc($data);
while($result=mysqli_fetch_assoc($data))

{
    echo "
<tr>
<td>".$result['ID']."</td>
<td>".$result['FIRST_NAME']."</td>
<td>".$result['LAST_NAME']."</td>
<td>".$result['AGE']."</td>
<td>".$result['GENDER']."</td>
<td>".$result['CONTACT_NO']."</td>
<td>".$result['DOB']."</td>
</tr>
";
}

?>

</table>



    <table border="3" align="center">
 <caption><br/> Patient Data </caption>

<tr>
    <th>ID</th>
    <th>DATE_OF_ADMISSION</th>
    <th>SYMPTOMP_FEVER</th>
    <th>SYMPTOMP_DRYCOUGH</th>
    <th>SYMPTOMP_TIREDNESS</th>
    <th>SYMPTOMP_LOSS_TASTE_AND_SMELL</th>
    <th>SYMPTOMP_OTHER</th>
    <th>DATE_OF_DISCHARGE_DEATH</th>
    <th>OTHER_DISEASES</th>
    <th>HEMOGLOBIN_COUNT</th>
    <th>CONDITIONS</th>
    <th>STATUS_NOW</th>
    <th>VACINNATION_1</th>
    <th>VACINNATION_2</th>
    <th>NO_OF_DAYS</th>
    <th>EXPENDATURE_perday</th>
    <th>TOTAL</th>

</tr>
<?php

 include 'checking2.php';
 $query= " SELECT * FROM batra_hospital_patdata";
$data = mysqli_query($con,$query);
$total= mysqli_num_rows($data); 
$result = mysqli_fetch_assoc($data);
if($total!=0)
$result = mysqli_fetch_assoc($data);
while($result=mysqli_fetch_assoc($data))

{
    echo "
<tr>
<td>".$result['ID']."</td>
<td>".$result['DATE_OF_ADMISSION']."</td>
<td>".$result['SYMPTOMP_FEVER']."</td>
<td>".$result['SYMPTOMP_FEVER']."</td>
<td>".$result['SYMPTOMP_TIREDNESS']."</td>
<td>".$result['SYMPTOMP_LOSS_TASTE_AND_SMELL']."</td>
<td>".$result['SYMPTOMP_OTHER']."</td>
<td>".$result['DATE_OF_DISCHARGE_DEATH']."</td>
<td>".$result['OTHER_DISEASES']."</td>
<td>".$result['HEMOGLOBIN_COUNT']."</td>
<td>".$result['CONDITIONS']."</td>
<td>".$result['STATUS_NOW']."</td>
<td>".$result['VACINNATION_1']."</td>
<td>".$result['VACINNATION_2']."</td>
<td>".$result['NO_OF_DAYS']."</td>
<td>".$result['EXPENDATURE_perday']."</td>
<td>".$result['TOTAL']."</td>

</tr>
";
}

?>
</table>

<br><br>
<h2>GB PANT HOSPITAL</h2>
<table border="3" align="center">
<caption>Patient information </caption> 
<tr>
    <th>ID</th>
    <th>FIRST_NAME</th>
    <th>LAST_NAME</th>
    <th>AGE</th>
    <th>GENDER</th>
    <th>CONTACT_NO</th>
    <th>DOB</th>
</tr>
<?php
 
 include 'checking2.php';
 $query= " SELECT * FROM fortis_patinfo";
$data = mysqli_query($con,$query);
$total= mysqli_num_rows($data); 
$result = mysqli_fetch_assoc($data);




 
if($total!=0)
$result = mysqli_fetch_assoc($data);
while($result=mysqli_fetch_assoc($data))

{
    echo "
<tr>
<td>".$result['ID']."</td>
<td>".$result['FIRST_NAME']."</td>
<td>".$result['LAST_NAME']."</td>
<td>".$result['AGE']."</td>
<td>".$result['GENDER']."</td>
<td>".$result['CONTACT_NO']."</td>
<td>".$result['DOB']."</td>
</tr>
";
}

?>
</table>

<br>

<table border="3" align="center" >
<caption> Patient Data </caption> 
<tr>
    <th >ID</th>
    <th  >DATE_OF_ADMISSION</th>
    <th >SYMPTOMP_FEVER</th>
    <th  >SYMPTOMP_DRYCOUGH</th>
    <th  >SYMPTOMP_TIREDNESS</th>
    <th   >SYMPTOMP_LOSS_TASTE_AND_SMELL</th>
    <th >SYMPTOMP_OTHER</th>
    <th >DATE_OF_DISCHARGE_DEATH</th>
    <th >OTHER_DISEASES</th>
    <th >HEMOGLOBIN_COUNT</th>
    <th  >CONDITIONS</th>
    <th >STATUS_NOW</th>
    <th >VACINNATION_1</th>
    <th >VACINNATION_2</th>
    <th >NO_OF_DAYS</th>
    <th >EXPENDATURE_perday</th>
    <th >TOTAL</th>

</tr>
<?php

 include 'checking2.php';
 $query= " SELECT * FROM fortis_patdata";
$data = mysqli_query($con,$query);
$total= mysqli_num_rows($data); 
$result = mysqli_fetch_assoc($data);
if($total!=0)
$result = mysqli_fetch_assoc($data);
while($result=mysqli_fetch_assoc($data))

{
    echo "
<tr>
<td>".$result['ID']."</td>
<td>".$result['DATE_OF_ADMISSION']."</td>
<td>".$result['SYMPTOMP_FEVER']."</td>
<td>".$result['SYMPTOMP_FEVER']."</td>
<td>".$result['SYMPTOMP_TIREDNESS']."</td>
<td>".$result['SYMPTOMP_LOSS_TASTE_AND_SMELL']."</td>
<td>".$result['SYMPTOMP_OTHER']."</td>
<td>".$result['DATE_OF_DISCHARGE_DEATH']."</td>
<td>".$result['OTHER_DISEASES']."</td>
<td>".$result['HEMOGLOBIN_COUNT']."</td>
<td>".$result['CONDITIONS']."</td>
<td>".$result['STATUS_NOW']."</td>
<td>".$result['VACINNATION_1']."</td>
<td>".$result['VACINNATION_2']."</td>
<td>".$result['NO_OF_DAYS']."</td>
<td>".$result['EXPENDATURE_perday']."</td>
<td>".$result['TOTAL']."</td>

</tr>
";
}

?>

</table>

<br><br>
<h2>INDRAPRASTHA HOSPITAL</h2>
<table border="3" align="center">
<caption>Patient information </caption> 
<tr>
    <th>ID</th>
    <th>FIRST_NAME</th>
    <th>LAST_NAME</th>
    <th>AGE</th>
    <th>GENDER</th>
    <th>CONTACT_NO</th>
    <th>DOB</th>
</tr>
<?php
 
 include 'checking2.php';
 $query= " SELECT * FROM gb_pant_hospital_patinfo";
$data = mysqli_query($con,$query);
$total= mysqli_num_rows($data); 
$result = mysqli_fetch_assoc($data);
if($total!=0)
$result = mysqli_fetch_assoc($data);
while($result=mysqli_fetch_assoc($data))

{
    echo "
<tr>
<td>".$result['ID']."</td>
<td>".$result['FIRST_NAME']."</td>
<td>".$result['LAST_NAME']."</td>
<td>".$result['AGE']."</td>
<td>".$result['GENDER']."</td>
<td>".$result['CONTACT_NO']."</td>
<td>".$result['DOB']."</td>
</tr>
";
}

?>
</table>

<br>

<table border="3" align="center">
<caption>Patient Data </caption> 
<tr>
    <th>ID</th>
    <th>DATE_OF_ADMISSION</th>
    <th>SYMPTOMP_FEVER</th>
    <th>SYMPTOMP_DRYCOUGH</th>
    <th>SYMPTOMP_TIREDNESS</th>
    <th>SYMPTOMP_LOSS_TASTE_AND_SMELL</th>
    <th>SYMPTOMP_OTHER</th>
    <th>DATE_OF_DISCHARGE_DEATH</th>
    <th>OTHER_DISEASES</th>
    <th>HEMOGLOBIN_COUNT</th>
    <th>CONDITIONS</th>
    <th>STATUS_NOW</th>
    <th>VACINNATION_1</th>
    <th>VACINNATION_2</th>
    <th>NO_OF_DAYS</th>
    <th>EXPENDATURE_perday</th>
    <th>TOTAL</th>

</tr>
<?php

 include 'checking2.php';
 $query= " SELECT * FROM gb_pant_hospital_patdata";
$data = mysqli_query($con,$query);
$total= mysqli_num_rows($data); 
$result = mysqli_fetch_assoc($data);
if($total!=0)
$result = mysqli_fetch_assoc($data);
while($result=mysqli_fetch_assoc($data))

{
    echo "
<tr>
<td>".$result['ID']."</td>
<td>".$result['DATE_OF_ADMISSION']."</td>
<td>".$result['SYMPTOMP_FEVER']."</td>
<td>".$result['SYMPTOMP_FEVER']."</td>
<td>".$result['SYMPTOMP_TIREDNESS']."</td>
<td>".$result['SYMPTOMP_LOSS_TASTE_AND_SMELL']."</td>
<td>".$result['SYMPTOMP_OTHER']."</td>
<td>".$result['DATE_OF_DISCHARGE_DEATH']."</td>
<td>".$result['OTHER_DISEASES']."</td>
<td>".$result['HEMOGLOBIN_COUNT']."</td>
<td>".$result['CONDITIONS']."</td>
<td>".$result['STATUS_NOW']."</td>
<td>".$result['VACINNATION_1']."</td>
<td>".$result['VACINNATION_2']."</td>
<td>".$result['NO_OF_DAYS']."</td>
<td>".$result['EXPENDATURE_perday']."</td>
<td>".$result['TOTAL']."</td>

</tr>
";
}

?>

</table>

<br><br>
<h2>FORTIS HOSPITAL</h2>
<table border="3" align="center";>
<caption>Patient information </caption> 
<tr>
    <th>ID</th>
    <th>FIRST_NAME</th>
    <th>LAST_NAME</th>
    <th>AGE</th>
    <th>GENDER</th>
    <th>CONTACT_NO</th>
    <th>DOB</th>
</tr>
<?php
 
 include 'checking2.php';
 $query= " SELECT * FROM indraprastha_hospital_patinfo";
$data = mysqli_query($con,$query);
$total= mysqli_num_rows($data); 
$result = mysqli_fetch_assoc($data);




 
if($total!=0)
$result = mysqli_fetch_assoc($data);
while($result=mysqli_fetch_assoc($data))

{
    echo "
<tr>
<td>".$result['ID']."</td>
<td>".$result['FIRST_NAME']."</td>
<td>".$result['LAST_NAME']."</td>
<td>".$result['AGE']."</td>
<td>".$result['GENDER']."</td>
<td>".$result['CONTACT_NO']."</td>
<td>".$result['DOB']."</td>
</tr>
";
}

?>

</table>

<br>

<table border="3" align="center";>  
<caption>Patient Data </caption> 
<tr>
    <th>ID</th>
    <th>DATE_OF_ADMISSION</th>
    <th>SYMPTOMP_FEVER</th>
    <th>SYMPTOMP_DRYCOUGH</th>
    <th>SYMPTOMP_TIREDNESS</th>
    <th>SYMPTOMP_LOSS_TASTE_AND_SMELL</th>
    <th>SYMPTOMP_OTHER</th>
    <th>DATE_OF_DISCHARGE_DEATH</th>
    <th>OTHER_DISEASES</th>
    <th>HEMOGLOBIN_COUNT</th>
    <th>CONDITIONS</th>
    <th>STATUS_NOW</th>
    <th>VACINNATION_1</th>
    <th>VACINNATION_2</th>
    <th>NO_OF_DAYS</th>
    <th>EXPENDATURE_perday</th>
    <th>TOTAL</th>

</tr>
<?php

 include 'checking2.php';
 $query= " SELECT * FROM indraprastha_hospital_patdata";
$data = mysqli_query($con,$query);
$total= mysqli_num_rows($data); 
$result = mysqli_fetch_assoc($data);
if($total!=0)
$result = mysqli_fetch_assoc($data);
while($result=mysqli_fetch_assoc($data))

{
    echo "
<tr>
<td>".$result['ID']."</td>
<td>".$result['DATE_OF_ADMISSION']."</td>
<td>".$result['SYMPTOMP_FEVER']."</td>
<td>".$result['SYMPTOMP_FEVER']."</td>
<td>".$result['SYMPTOMP_TIREDNESS']."</td>
<td>".$result['SYMPTOMP_LOSS_TASTE_AND_SMELL']."</td>
<td>".$result['SYMPTOMP_OTHER']."</td>
<td>".$result['DATE_OF_DISCHARGE_DEATH']."</td>
<td>".$result['OTHER_DISEASES']."</td>
<td>".$result['HEMOGLOBIN_COUNT']."</td>
<td>".$result['CONDITIONS']."</td>
<td>".$result['STATUS_NOW']."</td>
<td>".$result['VACINNATION_1']."</td>
<td>".$result['VACINNATION_2']."</td>
<td>".$result['NO_OF_DAYS']."</td>
<td>".$result['EXPENDATURE_perday']."</td>
<td>".$result['TOTAL']."</td>

</tr>
";
}

?>
</table>

</body>
</html>    