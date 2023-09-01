<?php ini_set('display_errors', 0); ?>
<?php include('headerfootertemp/admin/admin_head.php') ?>
<?php
// Include the database configuration
//include 'config/connection.php'; 


?>



<div class="col-lg-9 doc-middle-content">

    <div class="tab_shortcode">

        <div>
            <div class="shortcode_title">
                <h4 id="horizontal-tab">Menu Setup<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon=""
                        href="#horizontal-tab" style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a></h4>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="false">Main Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="true">Sub-Menu / Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="true">Features / Subject</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="d-flex">
                    <div class="col-lg-3 pt-5">

                        <form  method="post">

                            <div class="mb-3">
                                <label class="form-label">Add Main Menu</label>
                                <input name="title" class="form-control form-control-sm" type="text"
                                    placeholder="Name Of Menu" aria-label=".form-control-sm example">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea type="description" name="description" class="form-control" rows="3"
                                    placeholder="Describe Menu"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                          
                            
                        </form>
                            <?php
                                //include 'config/connection.php';
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                
                                    // collect value of input field
                                    $title= $_POST['title'];
                                    $description=$_POST['description'];
                                
                                    if (empty($title)) {
                                        echo "data is empty";
                                    } else {
                                        $sql= "INSERT into main_menu (title, description) VALUES ('$title','$description')";
                                        $result= mysqli_query($con,$sql);
                                    }
                                }
                                // Closing the connection.
                               $con->close();
                                ?>
                    
                    </div>

                    <div class="col-lg-9">
                        <article class="shortcode_info">
                            <div class="shortcode_title">
                                <h1>Menus</h1>
                                <p><span>Main Menu</span></p>
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
                                        
                                        
                                       
                                                        $sql1 = "SELECT * FROM main_menu";
                                                        $result1=mysqli_query($con,$sql1);
                                                        if($result1){
                                                            while($row1=mysqli_fetch_assoc($result1)){
                                                                $id=$row1['id'];
                                                                $title=$row1['title'];
                                                                $description=$row1['description'];

                                                            echo   '<tr>
                                                                        <th scope="row">'.$id.'</th>
                                                                        <td>'.$title.'</td>
                                                                        <td>'.$description.'</td>
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


                <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="d-flex">
                        <div class="col-lg-3 pt-5">
                     

    <form action="" method="post">
    
   
    <div class="mb-3">
        <label class="form-label">Add Project</label>
        <input name="Project_name" class="form-control form-control-sm" type="text"
            placeholder="Name Of Project" aria-label=".form-control-sm example">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea type="Description" name="Description" class="form-control" rows="3"
            placeholder="Describe Menu"></textarea>
    </div>
    <?php
include 'config/connection.php'; 


    include 'config/connection.php';

    $sql = "SELECT * FROM module";
    $res = mysqli_query($con,$sql);
    $count = mysqli_num_rows($res);

    ?>

    <div class="mb-3">
        <label class="form-label">Add Main_Menu_ID</label>
        <select name="main_menu_id" class="form-control form-control-sm" 
        placeholder="main_menu_id" aria-label=".form-control-sm example">
    <option selected>Select Any</option>
    <?php
    if($count > 0){
        while($row= mysqli_fetch_assoc($res)){
            $id = $row['ID'];
            $Module_name = $row['Module_name'];
            ?>
            <option class="nav-item" value="<?php echo $id; ?>"><?php echo $Module_name; ?></option>
            <?php                                     
        }
    }
    
    

?>
</select>
    </div>
   

<?php
$con->close();
?>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

<!--======================================================fetching  data=======================================-->
    <?php
    
?>
<!--++++++++++++++++++++++++++++++++++++++++++++++++++-->
<?php
 include 'config/connection.php'; 
                    if(isset($_POST['submit'])){
                        
                  
                        $Project_name=$_POST['Project_name'];
                        $sub_Description=$_POST['Description'];
                        $main_menu_id=$_POST['main_menu_id'];
                        
                        if(empty($Project_name)){

                            echo "data is empty";
                    }else{
                        $sql5 = "INSERT into project ( Project_name,Description,main_menu_id) VALUES ('$Project_name','$sub_Description', '$main_menu_id');";
                        $result= mysqli_query($con,$sql5);
                    }

                       
                    }
                    $con->close();
                ?>
    </form>
</div>

<div class="col-lg-9">
<article class="shortcode_info">
    <div class="shortcode_title">
        <h1>SUb_MENU</h1>
        <p><span>SubMenu</span></p>
    </div>

    <div class="table">
        <table class="table basic_table_info">
            <thead>
                <tr>
                    <th>ID</th>
                  
                    <th>Project_name</th>
                    <th>Description</th>
                    <th>main_menu_id</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include 'config/connection.php'; 
                        $sql2 = "SELECT * FROM project";
                        $result2=mysqli_query($con,$sql2);
                        if($result2){
                            while($row2=mysqli_fetch_assoc($result2)){
                                $subid=$row2['ID'];
                                $UID=$row2['UID'];
                                $Project_name=$row2['Project_name'];
                                $Description=$row2['Description'];
                                $main_menu_id=$row2['main_menu_id'];
                                

                            echo   '<tr>
                                        <th scope="row">'.$subid.'</th>
                                       
                                        <td>'.$Project_name.'</td>
                                        <td>'.$Description.'</td>
                                        <td>'.$main_menu_id.'</td>
                                        <td>
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$subid.'" class="text-light">Delete</a></button>
                                        </td>
                                    </tr>';
                                }
                            }
                           // mysqli_close($con)
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

                <div class="tab-pane " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="d-flex">
                        <div class="col-lg-3 pt-5">
    
                            <form action="" method="post">
    
                               <div class="mb-3">
                                    <label class="form-label">Add Module</label>
                                    <input name="Module_name" class="form-control form-control-sm" type="text"
                                        placeholder="Name Of Module" aria-label=".form-control-sm example">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea type="Description" name="Description" class="form-control" rows="3"
                                        placeholder="Describe Menu"></textarea>
                                </div>
                                <?php
                                    include 'config/connection.php'; 

                                    $sql = "SELECT * FROM project";
                                    $res = mysqli_query($con, $sql);
                                    $count = mysqli_num_rows($res);
                                    ?>
                                <div class="mb-3">
                                    <label class="form-label">Add Project_ID</label>
                                    <select name="project_id" class="form-control form-control-sm" type="text"
                                        placeholder="Project_ID" aria-label=".form-control-sm example">
                                        <option >Select Any</option>
                                            <?php
                                                if($count > 0){
                                                    while($row= mysqli_fetch_assoc($res)){
                                                        $id = $row['ID'];
                                                        $project_name = $row['Project_name'];
                                                        
                                                        ?>
                                                        <option class="nav-item" value="<?php echo $id; ?>"><?php echo $project_name; ?>
                                                            </option> 
                                                        <?php                                     
                                                    }
                                                }
                                              
                                            ?>

                           </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            
                                <?php
                                include 'config/connection.php'; 
                                if(isset($_POST['submit'])){
                                                    
                                                   
                                    $Module_name=$_POST['Module_name'];
                                    $Fea_Description=$_POST['Description'];
                                    $project_id=$_POST['project_id'];

                                if(empty($Module_name)){

                                        echo "data is empty";
                                }else{
                                    $sql = "INSERT into module ( Module_name,Description,project_id) VALUES ('$Module_name','$Fea_Description', '$project_id');";
                                    $result= mysqli_query($con,$sql);
                                }
                                }
                                 ?>
                          
                        </form>
    
                        </div>
    
                        <div class="col-lg-9">
                        <article class="shortcode_info">
                                <div class="shortcode_title">
                                    <h1>Feature_MENU</h1>
                                    <p><span>FeaMenu</span></p>
                                </div>
    
                                <div class="table">
                                    <table class="table basic_table_info">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                
                                                <th>Module_name</th>
                                                <th>Description</th>
                                                <th>Project_Id</th>
                                                <th>Action</th>
    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                 include 'config/connection.php'; 
                                                    $sql3 = "SELECT * FROM `module`";
                                                    $result3=mysqli_query($con,$sql3);
                                                    if($result3){
                                                        while($row3=mysqli_fetch_assoc($result3)){
                                                            $id=$row3['ID'];
                                                            
                                                            $Module_name=$row3['Module_name'];
                                                            $Fea_Description=$row3['Description'];
                                                            $project_id=$row3['project_id'];
                                                            

                                                        echo   '<tr>
                                                                    <th scope="row">'.$id.'</th>
                                                                    
                                                                    <td>'.$Module_name.'</td>
                                                                    <td>'.$FeaDescription.'</td>
                                                                    <td>'.$project_id.'</td>
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