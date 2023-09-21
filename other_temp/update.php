<?php ini_set('display_errors', 0); ?>
<?php include('headerfootertemp/admin/admin_head.php') ?>
<?php
   // Include the database configuration
   include 'config/connection.php'; 
   
   
   ?>
<?php
   $id=$_GET['updateid'];
   $sql = "SELECT * FROM `main_menu` where id=$id";
   $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_assoc($result);
   $id=$row['id'];
   $title=$row['title'];
   $description=$row['description'];
   
   
   if(isset($_POST['submit'])){
   
       
       $title= $_POST['title'];
       $description=$_POST['description'];
   
       $sql= "UPDATE `main_menu` set id=$id, title='$title', description='$description' where id=$id";
       $result= mysqli_query($con,$sql);
   
       if($result){
          // echo "updated inseted successfully";
           header('location:admin_add_menu.php');
       }
       else{
           die(mysqli_error($con));
       }
   }
   ?>
<div class="col-lg-9 doc-middle-content">
<div class="tab_shortcode">
   <div class="shortcode_title">
      <h4 id="horizontal-tab">Menu Setup<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon=""
         href="#horizontal-tab" style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a></h4>
   </div>
   <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
         <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Main Menu</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
            aria-controls="profile" aria-selected="false">Sub-Menu / Project</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
            aria-controls="contact" aria-selected="false">Features / Subject</a>
      </li>
   </ul>
   <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
         <div class="col-lg-3">
            <form action="admin_add_menu.php" method="post">
               <div class="mb-3">
                  <label class="form-label">Add Main Menu</label>
                  <input name="title" class="form-control form-control-sm" type="text"
                     placeholder="Name Of Menu" aria-label=".form-control-sm example" value="<?php echo $title; ?>">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                  <textarea type="description" name="description" class="form-control" rows="3"
                     placeholder="Describe Menu" value="<?php echo $description; ?>"><?php echo $description ?></textarea>
               </div>
               <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </form>
         </div>
      </div>
   </div>
</div>
</section>
<!--================End Topic Area =================-->
<?php include('headerfootertemp/admin/admin_footer.php') ?>
