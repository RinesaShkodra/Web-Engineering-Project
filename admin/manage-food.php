<?php 
include ('partials/menu.php');

?>
<br><br>
      <div class ="main-content">
          <div class ="wrapper">
              <h1>Manage Foods </h1>
              <br><br>

              <!-- button to add admin-->
             <a href="<?php echo SITEURL;?>admin/add-food.php " class="btn-primary"> Add Food </a>

            <br><br>
            <?php
            if(isset($_SESSION['add']))
            {
                  echo $_SESSION['add'];
                  unset($_SESSION['add']);
            }
            
            ?>


          <table class="tbl-full">
              <tr>
              <th>S.N</th> 
              <th>Title</th>
              <th>Price</th>
              <th>Image</th>
              <th>Featured</th>
              <th>Active</th>
              <th>Actions</th> 

              </tr>

              <?php
              //query to get all the food
              $sql = "SELECT * FROM tbl_food";
              
              $res = mysqli_query($conn, $sql);

              //count the rows to check if we have food in Database
              $count=mysqli_num_rows($res);
               
              //serial number
               $sn=1;

              if($count > 0){

                  while($row= mysqli_fetch_assoc($res)){
                        $id=$row['id'];
                        $title=$row['title'];
                        $price =$row['price'];
                        $image_name = $row['image_name'];
                        $featured = $row['featured'];
                        $active = $row['active'];
                        ?>   

                        <tr>
                          <td>1.</td>
                              <td><?php echo $sn++;?></td>
                              <td><?php echo $title ;?></td>
                              <td><?php echo $price ;?></td>

                              <td> 
                               <?php 
                                    //check if we have the image or not
                                    if($image_name == ""){
                                          echo "<div class = 'error'> Image not added</div>"
                                    }
                                    else{
                                          //display the image
                                           ?>
                                          <img src=" <?php echo SITEURL; ?> images/food/<?php echo $image_name ;?>" width ="100px" >
                                          <?php 
                                    }
                              
                              ?>
                              </td>

                              <td><?php echo $featured ;?></td>
                              <td><?php echo $active ;?></td>
                              <td>
                              <a href="#" class="btn-secondary"> Update Food </a>
                              <a href="#" class="btn-danger"> Delete Food </a>
                         </td>
                        </tr>        
              
                        <?php

                  }

              }
              else{
                  echo " <tr> <td colspan='7' class = 'error'> Food not Added yet.</td></tr>";
              }

            
              
              ?>
            
      </table> 




</div>
</div>