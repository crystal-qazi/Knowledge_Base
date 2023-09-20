<?php ini_set('display_errors', 1); ?>
<?php include('headerfootertemp/admin/admin_head.php') ?>
<?php
// Include the database configuration
include 'config/connection.php'; 

    $f_id=$_GET['updateid'];
    $sql1 = "SELECT subject.*, 
    project.Project_name,project.ID,
    module.Module_name, module.ID,
    main_menu.title, main_menu.id,
    tags.Tag_name, tags.ID  
                                    FROM subject 
    LEFT JOIN tags ON tags.ID = subject.Tagged_id
    LEFT JOIN project ON project.ID = subject.project_id
    LEFT JOIN module ON module.ID = subject.Module_id
    LEFT JOIN main_menu ON main_menu.id = subject.main_menu_id
    where subject.ID=$f_id";
    $result1=mysqli_query($con,$sql1);
    $row=mysqli_fetch_assoc($result1);
    $id=$row['ID'];
    $Subject_name=$row['Subject_name'];
    $Subect_description=$row['Description'];
    $Module_id=$row['Module_id'];
    $project_id=$row['project_id'];
    $main_menu_id=$row['main_menu_id'];
    $Tagged_id=$row['Tagged_id'];
    $Tagged_name=$row['Tag_name'];
    $Project_name=$row['Project_name'];
    $Module_name=$row['Module_name'];
    $Main_menu_name=$row['title'];
    
       

?>



<div class="col-lg-9 doc-middle-content">

    <div class="tab_shortcode">
        
        <div class="row border-bottom">
            <div class="col-12 d-flex">
            <div class="text-capitalize bold pr-5 pb-4">Feature of menu:</div>

            <div><?php echo $Main_menu_name ?></div>
            </div>
        </div>
        <form action="" method="POST">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="col-3">
                        

                        <?php
                        
                            include 'config/connection.php';
                            $sql1 = "SELECT * FROM project";
                            $res = mysqli_query($con,$sql1);
                            $count = mysqli_num_rows($res);
                             ?>

                        <label for="project">Select Project</label>
                        <select class="form-select form-select-sm form-control dropdown-toggle" id="project" name="project_id" aria-label="Default select example">
                            <option selected value="<?php echo $project_id ?>" class="dropdown-menu" ><?php echo $Project_name ?></option>

                            <?php
                                if($count > 0){
                                    while($row= mysqli_fetch_assoc($res)){
                                        $id = $row['ID'];
                                        $Project_name = $row['Project_name'];
                                        
                                  ?>
                            <option class="nav-item" value="<?php echo $id; ?>">
                                <?php echo $Project_name; ?>
                            </option>
                                    <?php                                     
                                    }
                                }
                                $con->close();
                                ?>

                        </select>
                    </div>
                    <div class="col-3">
                        <?php
                                include 'config/connection.php';
                                $sql2 = "SELECT * FROM module";
                                $res = mysqli_query($con,$sql2);
                                $count = mysqli_num_rows($res);
                            ?>
                        <label for="module">Select Module</label>
                        <select class="form-select form-select-sm form-control dropdown-toggle" id="module" name="Module_id" aria-label="Default select example">
                            <option selected value="<?php echo $Module_id ?>" class="dropdown-menu"><?php echo $Module_name ?></option>
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
                                $con->close();
                                ?>
                        </select>

                    </div>

                    
                    <!-- <div class="col-3">
                        <?php/*
                            include 'config/connection.php';
                            $sql3 = "SELECT * FROM main_menu";
                            $res = mysqli_query($con,$sql3);
                            $count = mysqli_num_rows($res);*/
                        ?>
                        <label for="main-menu">Select Main Menu</label>
                        <select class="form-select form-select-sm form-control" id="main_menu" name="main_menu_id" aria-label="Default select example">
                            <option selected value="<?//php echo $main_menu_id ?>"><?php // echo $Main_menu_name ?></option>

                            <?php/*
                                if($count > 0){
                                    while($row= mysqli_fetch_assoc($res)){
                                        $id = $row['id'];
                                        $title = $row['title'];
                                        */
                                  ?>
                            <option class="nav-item" value="<?php // echo $id; ?>"> <?php //echo $title; ?> </option>
                            <?php  /*                                   
                              }
                          }
                          $con->close(); */
                        ?>
                        </select>
                    </div> -->
                </div>
            </div>
    </div>

 
                                 
                 
    <div class="mb-3">
        <label class="form-label">Add Feature</label>
       
        <input name="Subject_name" class="form-control form-control-sm" type="text" placeholder="Name Of Feature"
            aria-label=".form-control-sm example" value="<?php echo $Subject_name?>">
    </div>
   

    
    <script src="assets\ckeditor\ckeditor.js"></script>

    <div class="mb-3">
        <strong>Description</strong>
        
        <textarea type="description" id='editor1' name='Description' ><?php echo $Subect_description ?></textarea>
       
                
            </textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
                                           
                         
    
    </div>

   

    <div class="col-6 d-flex">
        <div class="col-3">
            <?php
                    include 'config/connection.php';
                    $sql4 = "SELECT * FROM tags";
                    $res = mysqli_query($con,$sql4);
                    $count = mysqli_num_rows($res);

                  ?>

            <select class="form-select form-select-sm form-control" id="main-menu" name="Tagged_id" aria-label="Default select example">
                <option selected value="<?php echo $Tagged_id ?>"><?php echo $Tagged_name ?> </option>
                <option value="">None </option>

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
                          $con->close();
                        ?>
            </select>
        </div>

        <div class="col-3">
            <button type="submit" class="btn btn-primary" name="submit2" value="submit2">Submit</button>

        </div>
    </div>
    <?php
                    if(isset($_POST['submit2'])){
                        include 'config/connection.php';             
                    $f_id2=$_GET['updateid'];                
                        $Subject_name= $_POST['Subject_name'];
                        $description=$_POST['Description'];
                        $Module_id=$_POST['Module_id'];
                        $project_id=$_POST['project_id'];
                        //$main_menu_id=$_POST['main_menu_id'];
                        $Tagged_id=$_POST['Tagged_id']; 

                        if (empty($Tagged_id)) {
                            $sql5= "UPDATE `subject` set Subject_name='$Subject_name', Description='$description', Module_id=$Module_id,project_id=$project_id, Tagged_id=NULL where ID=$f_id2";
                            $result2= mysqli_query($con,$sql5);
                        } else {
                            $sql5= "UPDATE `subject` set Subject_name='$Subject_name', Description='$description', Module_id=$Module_id,project_id=$project_id, Tagged_id=$Tagged_id where ID=$f_id2";
                            $result2= mysqli_query($con,$sql5);
                }           
                                  
                        if($result2){
                            echo "updated inseted successfully";
                            //header('location:list_all_feature.php');                        
                        }
                        else{
                            die(mysqli_error($con));
                        }
                    
                }                            
            ?>
    </form>
  
    
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