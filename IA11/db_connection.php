<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass="";
 $db = "student info";


 $db= new mysqli("localhost", $dbuser, $dbpass,$db) or die("Connect failed:");
 if(isset($_POST['SUBMIT']){
  $Surname=mysqli_real_escape_string($db,$_POST['Surname']);
  $Othernames=mysqli_real_escape_string($db,$_POST['Othernames']);
  $firstname=mysqli_real_escape_string($db,$_POST['firstname']);
  $Date of Birth=mysqli_real_escape_string($db,$_POST['Date of Birth']);
  $Place of Birth=mysqli_real_escape_string($db,$_POST['Place of Birth']);
  $Phone number=mysqli_real_escape_string($db,$_POST['Phone Number']);
  $Email Address=mysqli_real_escape_string($db,$_POST['Email Address']);
  $Mothers Name=mysqli_real_escape_string($db,$_POST['Mothers Name']);
  $Mothers Number=mysqli_real_escape_string($db,$_POST['Mothers Number']);
  $Fathers Name=mysqli_real_escape_string($db,$_POST['Fathers Name']);
  $Fathers Number=mysqli_real_escape_string($db,$_POST['Fathers Number']);

  $Nationality=mysqli_real_escape_string($db,$_POST['Nationality']);
  $Gender=mysqli_real_escape_string($db,$_POST['Gender']);
  $Weight=mysqli_real_escape_string($db,$_POST['Weight']);
  $Height=mysqli_real_escape_string($db,$_POST['Height']);

  $sqli = "INSERT Into register (Surnname, Othernames,firstname,Date Of Birth,Place of Birth,Phone Number,Email Address,Mothers Name,Mothers Number,Fathers Name,Fathers Number,Nationality,Gender,Height,Weight")
  my sqlite_query($db,$sql);
             $SESSION['message'] = "Student Add Successful"
             header("location:view.php");

 }

?>