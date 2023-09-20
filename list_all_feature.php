<?php ini_set('display_errors', 0); ?>
<?php include('headerfootertemp/admin/admin_head.php') ?>
<?php
// Include the database configuration
//include 'config/connection.php'; 


?>



<div class="col-lg-9 doc-middle-content">

    <div class="tab_shortcode">

        <div>
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="d-flex">
                    

                    <div class="col-lg-12">
                        <article class="shortcode_info">
                            <div class="shortcode_title">
                                <h1>All Features</h1>
                                
                            </div>

                            <div class="table">
                                <table class="table basic_table_info ">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Title</th>
                                            <!-- <th>Description</th> -->
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                               
                                        // Include the database configuration
                                       include 'config/connection.php'; 
                                        
                                        
                                       
                                                        $sql1 = "SELECT * FROM subject";
                                                        $result1=mysqli_query($con,$sql1);
                                                        if($result1){
                                                            while($row1=mysqli_fetch_assoc($result1)){
                                                                $id=$row1['ID'];
                                                                $title=$row1['Subject_name'];
                                                                $description=$row1['Description'];

                                                            echo   '<tr>
                                                                        <th scope="row">'.$id.'</th>
                                                                        <td>'.$title.'</td>
                                                                       
                                                                        <td>
                                                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="update_admin_add_feature.php?updateid='.$id.'" class="text-light">Update</a></button>
                                                                            <button class="btn btn-sm btn-danger"><a href="delete.php?f_deleteid='.$id.'" class="text-light">Delete</a></button>
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

<!--========================================================================================== -->
                

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