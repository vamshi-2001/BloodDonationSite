<?php   
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="bloodusersdata";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
        die("connection fail");
    }

    $name=$_POST['name'];
    $phonenumber=$_POST['phn'];
    $email=$_POST['email'];
    $password=$_POST['pwd'];
    $cpassword=$_POST['pwd1'];

    $sql="INSERT INTO users (Sn,Name,PhoneNumber,Email,Password,ConfirmPassword) VALUES (NULL,'$name','$phonenumber','$email','$password','$cpassword')";

if($conn->query($sql)==true)
{ 
    
    ?>
    <center>
    <font color="blue">
    <h1>Yor Are Successfully Created The Account !!!</h1></font>
    <font color="green">
    <h3>Now You Can Login</h3></font>
    </center>
    <?php

}
else{
    echo "error";
}
$conn->close();
?>
