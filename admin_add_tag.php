<?php ini_set('display_errors', 0); ?>
<?php include('headerfootertemp/admin/admin_head.php') ?>
<?php
// Include the database configuration
include 'config/connection.php'; 


?>



<div class="col-lg-9 doc-middle-content">

    <div class="tab_shortcode">

        <div>
            
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="d-flex">
                    <div class="col-lg-3 pt-5">

                        <form  method="post">

                            <div class="mb-3">
                                <label class="form-label">Add Main Menu</label>
                                <input name="Tag_name" class="form-control form-control-sm" type="text"
                                    placeholder="Name Of Menu" aria-label=".form-control-sm example">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea type="description" name="Description" class="form-control" rows="3"
                                    placeholder="Describe Menu"></textarea>
                            </div>
                       <!--     <div class="mb-3">
                                <label class="form-label">Page Url</label>
                                <input name="url" class="form-control form-control-sm" type="text"
                                    placeholder="without space and .php" aria-label=".form-control-sm example">
                            </div>
-->   
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                          
                            
                        </form>
                            <?php

                            include 'config/connection.php';

                            
                            
                            if(isset($_POST['submit'])){
                        
                                //include 'config/connection.php';
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                
                                    // collect value of input field
                                    $Tag_name= $_POST['Tag_name'];
                                    $Description=$_POST['Description'];
                                    // $main_url=$_POST['url'];
                                
                                    if (empty($Tag_name)) {
                                        echo "data is empty";
                                    } else {
                                        $sql9= "INSERT into tags (Tag_name, Description) VALUES ('$Tag_name','$Description')";
                                        $result9= mysqli_query($con,$sql9);
                                    }
                                }}
                                // Closing the connection.
                               $con->close();
                                ?>
                    
                    </div>

                    <div class="col-lg-9">
                        <article class="shortcode_info">
                            <div class="shortcode_title">
                                <h1>Tags</h1>
                                <p><span>Add Tags</span></p>
                            </div>

                            <div class="table">
                                <table class="table basic_table_info">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                               
                                        // Include the database configuration
                                       include 'config/connection.php'; 
                                        
                                        
                                       
                                                        $sql9 = "SELECT * FROM tags";
                                                        $result9=mysqli_query($con,$sql9);
                                                        if($result9){
                                                            while($row9=mysqli_fetch_assoc($result9)){
                                                                $id=$row9['ID'];
                                                                $Tag_name=$row9['Tag_name'];
                                                                $Description=$row9['Description'];

                                                            echo   '<tr>
                                                                        <th scope="row">'.$id.'</th>
                                                                        <td>'.$Tag_name.'</td>
                                                                        <td>'.$Description.'</td>
                                                                        <td>
                                                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                                                                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                                                                        </td>
                                                                    </tr>';
                                                                }
                                                            }
                                                            $con->close();
                                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </article>
                    </div>
                    </div>
                </div>


               
                <!--============================  Feature ============================-->

               
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>

</div>
</div>
</div>


</section>
<!--================End Topic Area =================-->

<?php include('headerfootertemp/admin/admin_footer.php') ?>