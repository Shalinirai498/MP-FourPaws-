<?php
  
session_start();

$conn = mysqli_connect("localhost","root","","login_sample_db");

if(isset($_POST['addsubmit'])){

    $petname = $_POST['petname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $age = $_POST['age'];
    $vac = $_POST['vac'];
    $tra = $_POST['tra'];
    $image = $_FILES['dbimage']['name'];

}

$query = "INSERT INTO pet (petname,email,phonenumber,age,vac,tra,dbimage) VALUES('$petname','$email','$phonenumber','$age','$vac','$tra','$image')";
$query_run = mysqli_query($conn,$query);

if($query_run){

    move_uploaded_file($_FILES["dbimage"]["tmp_name"], "upload/".$_FILES["dbimage"]["name"]);
    $_SESSION['status'] = "Details Stored Successfully";
    header('Location: account.html');

}
else{

    $_SESSION['status'] = "Details Not Stored Successfully";
    header('Location: account.html');

}

?>