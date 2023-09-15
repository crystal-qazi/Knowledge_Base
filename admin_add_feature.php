<?php ini_set('display_errors', 1); ?>
<?php include('headerfootertemp/admin/admin_head.php') ?>
<?php
// Include the database configuration
//include 'config/connection.php'; 


?>



<div class="col-lg-9 doc-middle-content">

    <div class="tab_shortcode">
        <div ></div>
        <div  class="row border-bottom">
            <div class="col-12 d-flex">
            <div class="text-capitalize bold pr-5 pb-4">Part Of Main Menu:</div>

            <div id="main_menu_display"><?php echo $Main_menu_name ?></div>
            </div>
        </div>
        <form action="" method="POST">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="col-3">
                        <?php
                            include 'config/connection.php';
                            $sql = "SELECT * FROM project";
                            $res = mysqli_query($con,$sql);
                            $count = mysqli_num_rows($res);
                             ?>

                        <label for="project">Select Project</label>
                        <select class="form-select form-select-sm form-control" id="project" name="project_id" aria-label="Default select example">
                            <option selected value="0">Select Any</option>

                            <?php
                                if($count > 0){
                                    while($row= mysqli_fetch_assoc($res)){
                                        $id = $row['ID'];
                                        $Project_name = $row['Project_name'];
                                        $Project_Description = $row['Description'];
                                  ?>
                            <option class="nav-item" value="<?php echo $id; ?>">
                                <?php echo $Project_name; ?>
                            </option>
                                    <?php                                     
                                    }
                                }
                                ?>

                        </select>
                    </div>
                    <div class="col-3">
                        <?php
                                include 'config/connection.php';
                                $sql = "SELECT * FROM module ";
                                $res = mysqli_query($con,$sql);
                                $count = mysqli_num_rows($res);
                            ?>
                        <label for="module">Select Module</label>
                        <select class="form-select form-select-sm form-control" id="module" name="Module_id" aria-label="Default select example">
                            <option selected value="0">Select Any</option>
                            <?php
                                if($count > 0){
                                    while($row= mysqli_fetch_assoc($res)){
                                        $id = $row['ID'];
                                        $Module_name = $row['Module_name'];
                                        ?>
                                    <option class="nav-item" value="<?php echo $id; ?>" >
                                        <?php echo $Module_name; ?>
                                    </option>
                                    <?php                                     
                                    }
                                }
                                ?>
                        </select>

                    </div>

                    
                    <!-- <div class="col-3">
                        <?php/*
                            include 'config/connection.php';
                            $sql = "SELECT * FROM main_menu";
                            $res = mysqli_query($con,$sql);
                            $count = mysqli_num_rows($res);*/
                        ?>
                        <label for="main-menu">Select Main Menu</label>
                        <select class="form-select form-select-sm form-control" id="main_menu" name="main_menu_id" aria-label="Default select example">
                            <option selected value="0">Select Any</option>

                            <?php/*
                                if($count > 0){
                                    while($row= mysqli_fetch_assoc($res)){
                                        $id = $row['id'];
                                        $title = $row['title'];*/
                                  ?>
                            <option class="nav-item" value="<?php // echo $id; ?>"> <?php // echo $title; ?> </option>
                            <?php  /*                                   
                              }
                          }*/
                        ?>
                        </select>
                    </div> -->
                </div>
            </div>
    </div>


    <div class="mb-3">
        <label class="form-label">Add Feature</label>
        <input name="Subject_name" class="form-control form-control-sm" type="text" placeholder="Name Of Feature"
            aria-label=".form-control-sm example">
    </div>
    <!-- <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea type="description" name="Description" class="form-control" rows="3"
            placeholder="Describe Feature"></textarea>
    </div> -->

    <!-- <script src="assets\ckeditor5\ckeditor.js"></script>

    <div class="mb-3">
        <strong>Description</strong>
        
        <textarea id='editor' name='Description' ></textarea>
       
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor') )
                .catch( error => {
                    console.error( error );
                } );
        </script>
       
    </div> -->


    <script src="assets\ckeditor\ckeditor.js"></script>

    <div class="mb-3">
        <strong>Description</strong>
        
        <textarea type="description" id='editor1' name='Description' ></textarea>
        <!-- <textarea type="description" name="Description"  id="editor1" rows="10" cols="80" > -->
                
            </textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
       
        <!-- <script>
            ClassicEditor
                .create( document.querySelector( '#editor') )
                .catch( error => {
                    console.error( error );
                } );
        </script> -->
        <!--  -->
    </div>

    <div class="col-6 d-flex">
        <div class="col-3">
            <?php
                    include 'config/connection.php';
                    $sql = "SELECT * FROM tags";
                    $res = mysqli_query($con,$sql);
                    $count = mysqli_num_rows($res);

                  ?>

            <select class="form-select form-select-sm form-control" id="main-menu" name="Tagged_id" aria-label="Default select example">
                <option selected value="">Tag</option>

                <?php
                          if($count > 0){
                              while($row= mysqli_fetch_assoc($res)){
                                  $id = $row['ID'];
                                  $Tag_name = $row['Tag_name'];
                                  ?>
                <option class="nav-item" value="<?php echo $id; ?>">
                    <?php echo $Tag_name; ?>
                </option>
                <?php                                     
                              }
                          }
                        ?>
            </select>
        </div>

        <div class="col-3">
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>

        </div>
    </div>
    </form>
    <?php
                if(isset($_POST['submit'])){
            
                    //include 'config/connection.php';
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                        // collect value of input field
                        $Subject_name= $_POST['Subject_name'];
                        $description=$_POST['Description'];
                        $Module_id=$_POST['Module_id'];
                        $project_id=$_POST['project_id'];
                       // $main_menu_id=$_POST['main_menu_id'];
                        $Tagged_id=$_POST['Tagged_id'];
                    
                        if (empty($Subject_name)) {
                            echo "data is empty";
                        } else {
                           
                            $sql= "INSERT into subject (Subject_name, Description, Module_id, project_id, Tagged_id) VALUES ('$Subject_name','$description','$Module_id','$project_id','$Tagged_id')";
                            $result= mysqli_query($con,$sql);
                        }
                    }}
                    // Closing the connection.
                    $con->close();
            ?>
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