<?php ini_set('display_errors', 1); ?>
<?php include('headerfootertemp/admin/admin_head.php') ?>
<?php
// Include the database configuration
include 'config/connection.php'; 


?>
<?php
    $f_id=$_GET['updateid'];
    $sql1 = "SELECT * FROM subject LEFT JOIN tags ON tags.ID = subject.Tagged_id
    LEFT JOIN project ON project.ID = subject.project_id
    LEFT JOIN module ON module.ID = subject.Module_id
    LEFT JOIN main_menu ON main_menu.id = subject.main_menu_id
    where subject.ID=$f_id";
    $result1=mysqli_query($con,$sql1);
    $row=mysqli_fetch_assoc($result1);
    $id=$row['ID'];
    $Subject_name=$row['Subject_name'];
    $Description=$row['Description'];
    $Module_id=$row['Module_id'];
    $project_id=$row['project_id'];
    $main_menu_id=$row['main_menu_id'];
    $Tagged_id=$row['Tagged_id'];
    $Tagged_name=$row['Tag_name'];
    $Project_name=$row['Project_name'];
    $Module_name=$row['Module_name'];
    $Main_menu_name=$row['title'];
    
    
    

/*
    if(isset($_POST['submit'])){

        $f_id2=$_GET['updateid'];
        $Subject_name=$row['Subject_name'];
        $description=$row['Description'];
        $Module_id=$row['Module_id'];
        $project_id=$row['project_id'];
        $main_menu_id=$row['main_menu_id'];
        $Tagged_id=$row['Tagged_id'];

        $sql2= "UPDATE subject set Subject_name='$Subject_name', Description='$Description', Module_id='$Module_id',project_id='$project_id', main_menu_id='$main_menu_id', Tagged_id='$Tagged_id' where id=10";
        $result= mysqli_query($con,$sql2);

        if($result){
           // echo "updated inseted successfully";
           // header('location:list_all_feature.php');
        }
        else{
            die(mysqli_error($con));
        }
    }*/
?>



<div class="col-lg-9 doc-middle-content">

    <div class="tab_shortcode">
        <div><?php echo $Main_menu_name ?></div>
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
                            <option selected value="<?php echo $project_id ?>"><?php echo $Project_name ?></option>

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
                            <option selected value="<?php echo $Module_id ?>"><?php echo $Module_name ?></option>
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

                    
                    <div class="col-3">
                        <?php
                            include 'config/connection.php';
                            $sql = "SELECT * FROM main_menu";
                            $res = mysqli_query($con,$sql);
                            $count = mysqli_num_rows($res);
                        ?>
                        <label for="main-menu">Select Main Menu</label>
                        <select class="form-select form-select-sm form-control" id="main_menu" name="main_menu_id" aria-label="Default select example">
                            <option selected value="<?php echo $main_menu_id ?>"><?php echo $Main_menu_name ?></option>

                            <?php
                                if($count > 0){
                                    while($row= mysqli_fetch_assoc($res)){
                                        $id = $row['id'];
                                        $title = $row['title'];
                                  ?>
                            <option class="nav-item" value="<?php echo $id; ?>"> <?php echo $title; ?> </option>
                            <?php                                     
                              }
                          }
                        ?>
                        </select>
                    </div>
                </div>
            </div>
    </div>


    <div class="mb-3">
        <label class="form-label">Add Feature</label>
        <input name="Subject_name" class="form-control form-control-sm" type="text" placeholder="Name Of Feature"
            aria-label=".form-control-sm example" value="<?php echo $Subject_name ?>">
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
        
        <textarea type="description" id='editor1' name='Description' ><?php echo $Description ?></textarea>
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
                <option selected value="<?php echo $Tagged_id ?>"><?php echo $Tagged_name ?> </option>

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
            <button type="submit" class="btn btn-primary" name="submit2" value="submit2">Submit</button>

        </div>
    </div>
    <?php
                 if(isset($_POST['submit2'])){

                    $f_id2=$_GET['updateid'];
                    $ID=$row['ID'];
                    $Subject_name=$row['Subject_name'];
                    $description=$row['Description'];
                    $Module_id=$row['Module_id'];
                    $project_id=$row['project_id'];
                    $main_menu_id=$row['main_menu_id'];
                    $Tagged_id=$row['Tagged_id'];
            
                    $sql3= "UPDATE subject set Subject_name='$Subject_name', Description='Description', Module_id=1,project_id=1, main_menu_id=1, Tagged_id=1 where id=10";
                    $result2= mysqli_query($con,$sql3);
            
                    if($result2){
                       // echo "updated inseted successfully";
                       // header('location:list_all_feature.php');
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