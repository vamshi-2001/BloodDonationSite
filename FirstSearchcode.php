<?php
    $connection = mysqli_connect("localhost","root","","bloodusersdata");
    if (isset($_POST['search_address']))
    {
        $id = $_POST ['address'];
        $query=" SELECT * FROM donars WHERE Address ='$id' ";
        $query_run = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_run) > 0 )
        {
            ?>
            <form action="FirstSearchCode.php" method="POST" align="center"><br><br>
            <label><font color="red" size="3">Search  By Another Address</font></label><br><br>
            <input type="text" name="address" value="">
            <br><br>
            
            <button type="submit" name="search_address">Search</button>
        </form>
        
            <table cellspacing="10" cellpadding="10" bgcolor="Green" width="60%" align="center"> 
            <tr><font color="red"><th>Name</th><th>PhoneNumber</th><th>E-Mail</th><th>D-O-B</th><th>BloodGroup</th><font color="red"></tr>
            <tr>
            <?php
            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                
                    
                        
                    
                    <td align="center"><?php echo $row['Name'] ?></td>
                    <td align="center"><?php echo $row['PhoneNumber'] ?></td>
                    <td align="center"><?php echo $row['email'] ?></td>
                    <td align="center"><?php echo $row['DateOfBirth'] ?></td>
                    <td align="center"><?php echo $row['bloodGroup']?></td>
                    <tr align="center"><td></td></tr>
                    <br>
                    
                
                
                <?php 
            }
            ?>
            </font></tr>
            </table></li> </ul>
            <?php
        }
        

        else
        {
            
            ?>
            <body>
            <br><br>
            <font color="Blue" align="center"><h1>"No Data Found"</h1></font>
            <form action="FirstSearchCode.php" method="POST" align="center">
            <label><font color="red" size="3">Search Again By The Nearest Areas To You</font></label><br><br><input type="text" name="address" value="">
            <br><br>
            
            <button type="submit" name="search_address">Search</button>
            </form>
            </body>
            <?php
                
        }

    }
?>