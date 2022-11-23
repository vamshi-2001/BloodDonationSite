<?php   
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="wages";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
        die("connection fail");
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO slaves (Sn,name,email,password) VALUES (NULL,'$name','$email','$password')";

if($conn->query($sql)==true)
{ 
    ?>
    <p><p><center>
    <h1><font face="mystrel" color="red">Conguralations!!!</font></h1>
    <h3><font face="mystrel" color="blue">You Are Successfully Added the Details</font></h3></center>
    <?PHP

}
else{
    echo "error";
}
$conn->close();
?>

