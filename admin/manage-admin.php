<?php include('partials/menu.php'); ?>


        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>

                <br>

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add']; //show Session Message
                        unset($_SESSION['add']); //Remove Session Message
                    }
                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                ?>
                <br><br><br>

               
                <a href="add-admin.php" class="btn-primary">Add Admin</a>

                <br><br><br>

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    
                    <?php 
                        //Query to Get all Admin
                        $sql = "SELECT * FROM tbl_admin";
                        //Execute the Query
                        $conn = mysqli_connect('localhost:3325', 'root', "") or die (mysqli_error()); //db connect
                        $db_select = mysqli_select_db($conn,'food-order') or die (mysqli_error());
                        $res = mysqli_query($conn, $sql);
                        

                        //Query is Executed of Not
                        if($res==TRUE)
                        {
                            // check if we have data in db
                            $count = mysqli_num_rows($res); // get all the rows in db

                            $sn=1; //shto vlere

                            //nr i rows
                            if($count>0)
                            {
                                //ka data ne db
                                while($rows=mysqli_fetch_assoc($res)) //while loop to get data from db, it will run perderi sa kemi data ne db
                                {

                                    //Get individual DAta
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];

                                    //display values 
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                            <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                                        </td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {
                                //no data in db
                            }
                        }
                    ?>
                </table>

            </div>
        </div>