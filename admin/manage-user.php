<?php include('partials/menu.php'); ?>


        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Users</h1>

                <br>

                <?php 
                   
                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                ?>
                <br><br><br>

                <br><br><br>

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>

                    
                    <?php 
                        //Query to Get all Admin
                        $sql = "SELECT * FROM users";
                        //Execute the Query
                        $conn = mysqli_connect('localhost', 'root', "") or die (mysqli_error()); //db connect
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
                                    $username=$rows['username'];
                                    $email=$rows['email'];

                                    //display values 
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/delete-user.php?id=<?php echo $id; ?>" class="btn-danger">Delete User</a>
                                        </td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {
                                //no user in db
                            }
                        }
                    ?>
                </table>

            </div>
        </div>