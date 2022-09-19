<?php
$name=$_POST['name'];
$email=$_POST['email']; 
$password=$_POST['password']; 



  $conn = new mysqli('localhost','root','','try');
  if($conn->connect_error){
    die('connection Failed : ' .$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into login( name,email,password)
     values(? , ? , ?  )");
    $stmt->bind_param("sss", $name,$email,$password );
    $stmt->execute();
    echo"registration successfully... ";
    $stmt->close();
    $conn->close();
  }

?>