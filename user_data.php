<?php

include ('connect.php');

$name=$_POST['name'];
$emailAddress=$_POST['emailAddress'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];


if ($password!=$cpassword){

    echo '<script>
alert("passwords do not match");
window.location="/register.php"
</script>';
}
else{
    $password=md5($password);

    $sql= "INSERT INTO `user_data`( `name`, `emailAddress`, `dob`, `gender`, `country`, `password`)
         VALUES ('$name','$emailAddress','$dob','$gender','$country','$password')";
      
      
      $con = mysqli_connect('localhost','root','','userdata');
    $result=mysqli_query($con,$sql);

    if($result){
        echo '<script>
alert("registration success!!");
</script>';
    }else{
        die(mysqli_error($con));
    }

}

?>
        