<?php ini_set('display_errors', 0); ?>
<?php include('headerfootertemp/admin/admin_head.php') ?>
<?php
// Include the database configuration
include 'config/connection.php'; 


?>



<div class="col-lg-9 doc-middle-content">

    <div class="tab_shortcode">
        <div class="shortcode_title">
            <h4 id="horizontal-tab">Menu Setup<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="" href="#horizontal-tab" style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a></h4>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Main Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sub-Menu / Project</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Features / Subject</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="col-lg-3">

                <?php
                if(isset($_POST['submit'])){
                    $title= $_POST['title'];
                    $description=$_POST['description'];

                    $sql= "INSERT into main_menu (title, description) VALUES ('$title','$description')";
                    $result= mysqli_query($con,$sql);

                    if($result){
                        header('location:admin_add_menu.php');
                        //echo "Data inseted successfully";
                    }
                    else{
                        die(mysqli_error($con));
                    }
                }
            ?>

                <form  method="post">
                    
                <div class="mb-3">
                    <label class="form-label">Add Main Menu</label>
                    <input name="title" class="form-control form-control-sm" type="text" placeholder="Name Of Menu" aria-label=".form-control-sm example">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea name="description" class="form-control"  rows="3" placeholder="Describe Menu"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            </div>






<div>


<article class="shortcode_info">
        <div class="shortcode_title">
            <h1>Menus</h1>
            <p><span>Main Menu</span></p>
        </div>

        <div class="basic_table">
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
                $sql1 = "SELECT * FROM `main_menu`";
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
                                    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                                </td>
                            </tr>';
                    }
                }
            ?>
               
                </tbody>
            </table>
        </div>
    </article>
        </div>

     

            
        
        
        
        
        
        
        
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="col-lg-3">
                

            


                </div>
                

                  
                </div>

       


    
            
            <div class="tab-pane fade" id="profile-tab" role="profilepanel" aria-labelledby="profile-tab">
                Don't get shirty with me what a plonker on your bike mate bugger all mate chip shop bits and bobs smashing mush bugger cup of char, in my flat.
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                Don't get shirty with me what a plonker on your bike mate bugger all mate chip shop bits and bobs smashing mush bugger cup of char, in my flat.
            </div>
        </div>
    </div>

</div>

                      

                    
          
               
                </div>
            </div>
        </section>
        <!--================End Topic Area =================-->

        <?php include('headerfootertemp/admin/admin_footer.php') ?>
