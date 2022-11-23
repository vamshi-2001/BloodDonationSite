<?php
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    //Databse connection here
    $con = new mysqli("localhost","root","","bloodusersdata");
    if($con->connect_error)
    {
        die("failed to connect : ".$con->connect_error);
    }
    else{
        $stmt = $con->prepare("select * from users where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if($data['Password'] == $password)
            {
                
                ?>

                <body>
                <table width="100%">
                    <tr><td><h2 align="right"><a href="Blogin.html"><button><h3>Logout</h3></button></a></h2></td></tr>
                </table>
                <hr>
                <center>
                <br>
                <font color="Green" size="6">If You Need The Blood , U Can Search Here To Get The Details Of Blood Donar</font>
                </center>
                <br><br>
                <form action="FirstSearchCode.php" method="POST" align="center">
                <input type="text" name="address" placeholder="District" value="" required>
                <br><br>
            
                <button type="submit" name="search_address">Search</button>
                 </form>
                 <center>
                 <h3><font color="Blue">For Any Queries Contact Us At-</font><br></h3>
                 <font color="red">Mobile:</font>9390440133<br>
                 <font color="red">E-Mail:</font>Vamshiknr321@gmail.com<br>
                 </center><hr>
                 <marquee>
                    <img src="https://m.economictimes.com/thumb/msid-83502809,width-1200,height-900,resizemode-4,imgsize-353228/blood-donation_istock.jpg" width="20%" height="30%">
                    <img src="https://img.freepik.com/free-psd/donate-blood-campaign-flyer-template_23-2148690134.jpg?w=2000" width="20%" height="30%">
                    <img src="https://m.economictimes.com/thumb/msid-83502809,width-1200,height-900,resizemode-4,imgsize-353228/blood-donation_istock.jpg" width="20%" height="30%">
                    <img src="https://img.freepik.com/free-psd/donate-blood-campaign-flyer-template_23-2148690134.jpg?w=2000" width="20%" height="30%">
                    <img src="https://m.economictimes.com/thumb/msid-83502809,width-1200,height-900,resizemode-4,imgsize-353228/blood-donation_istock.jpg" width="20%" height="30%">
                 
                    <img src="https://m.economictimes.com/thumb/msid-83502809,width-1200,height-900,resizemode-4,imgsize-353228/blood-donation_istock.jpg" width="20%" height="30%">
                 </marquee>
                 <hr>
                 
                 </body>
                <?php
            }
            else{
                ?>
                <center>
                <font color="Red"><h2>Ooops </font> Invalid Password !!</h2>
                <font color="green"><h3>Try again</h3>
                </center>
                <table align="center" bgcolor="red" cellspacing="10"><tr><td>
        <font color="white" width="100%">
        <form  action="mylogin.php" method="POST">
            E-mail:<br>
            <input type="text" name="email" id="email" placeholder="abc@gmail.com" required><br><br>
            Password:<br>
            <input type="password" name="pwd" id="pwd" required><br><br>
            <center><input type="submit" value="Submit" name="sub" id="sub"></center></td></tr>
        </form>
        </table>
                <?php
            }
        }
        else
        {
            ?>
            <center>
            <font color="Red"><h2>Ooops </font> Invalid UserName !!</h2>
            <font color="green"><h3>Try again</h3>
            </center>
            <table align="center" bgcolor="red" cellspacing="10"><tr><td>
    <font color="white" width="100%">
    <form  action="mylogin.php" method="POST">
        E-mail:<br>
        <input type="text" name="email" id="email" placeholder="abc@gmail.com" required><br><br>
        Password:<br>
        <input type="password" name="pwd" id="pwd" required><br><br>
        <center><input type="submit" value="Submit" name="sub" id="sub"></center></td></tr>
    </form>
    </table>
            <?php
        }

    }
?>