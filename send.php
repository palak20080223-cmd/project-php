<?php
//echo "hello";
//echo "<br>";
//$name="palak";

//echo $name=$_GET[''];
//echo $name=$_POST['n1'];

 $name=$_REQUEST['n1'];
  $dob=$_REQUEST['dob'];

 $age=$_REQUEST['age'];
$mobile=$_REQUEST['tel'];
 $email=$_REQUEST['email'];
 $interest=$_REQUEST['interest'];
 $city=$_REQUEST['city'];
 $password=$_REQUEST['psw'];


$connect=mysqli_connect("localhost","root","","p1");
echo $sql="insert into user(name,dob,age,mobile,email,interest,city,password) values ('$name','$dob','$age','$mobile','$email','$interest','$city','$password')";
mysqli_query($connect,$sql);
 


?>