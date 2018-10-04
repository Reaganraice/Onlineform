<?php
require 'dbh.php';

$_SESSION['email'] = $_POST['email'];
$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['lastname'] = $_POST['lastname'];
 


$email=$_POST['email'];

$sql= "SELECT * FROM users WHERE email='$email'" ;
$result=mysqli_query($conn,$sql);

if($result->num_rows >0){
    $_SESSION['message'] = "User with this email already exists";
    header("Location: index.php");
}
else {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];

    $sql = "INSERT INTO users (firstname, lastname, email)
    VALUES('$firstname','$lastname','$email')";
    $result=mysqli_query($conn,$sql);
    if($result=1){
        $_SESSION['active'] = 0;
        $_SESSION['logged_in'] = true;
        $_SESSION['messege'] ="Confirmation link has been send to $email,please verify
        your account by clicking on the link in the message ";
        $sql="SELECT id FROM users WHERE firstname='$firstname'";
        $result=mysqli_query($conn,$sql);
 
       if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
             $id = $row['id'];
             echo $row['id'];  
          }
        }
 
        // header("Location: home.php");

    }
    else {
        $_SESSION['messege'] ='Regiatration Failled !';

        echo "This person already sign up!";

        header("Location: index.php");  
    }
}
?>