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
    $gender=$_POST['gender'];
    $phonenumber=$_POST['phn'];
    $email=$_POST['email'];
    $bloodGroup=$_POST['blood'];
    $address=$_POST['district'];
    $Dob=$_POST['dob'];

    $sql="INSERT INTO donars (Sn,Name,Gender,PhoneNumber,email,bloodGroup,Address,DateOfBirth) VALUES (NULL,'$name','$gender','$phonenumber','$email','$bloodGroup','$address','$Dob')";

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

