<?php

$SERVER = "localhost";
$USER = "root";
$PASSWRD = "";
$DB ="exam";

$con = mysqli_connect($SERVER,$USER,$PASSWRD,$DB);

if($con){
    echo "connect";
}

$name = $_POST['name'];
$gmail = $_POST['gmail'];
$password = $_POST['pass'];
$secondpassword = $_POST['secpass'];

$f = $_FILES["gallary"]["name"];
$tmp = $_FILES["gallary"]["tmp_name"];
$pic = "picturs/".$f;

move_uploaded_file($tmp,$pic);


$sql = "INSERT INTO `userdata`(`name`, `gmail`, `password`, `re-password`, `image`) VALUES ('$name','$gmail','$password','$secondpassword','$pic')";

$result = mysqli_query($con,$sql);

if($result){
    echo "done";
}
else{
    echo "not done";
}

?>