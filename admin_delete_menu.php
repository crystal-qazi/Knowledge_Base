<?php
   include 'config/connection.php';
   
   if(isset($_GET['deleteid'])){
       $id=$_GET['deleteid'];
   
       $sql="DELETE from `main_menu` where id=$id";
       $result = mysqli_query($con,$sql);
       if($result){
          // echo "Delete success"; 
          header('location:admin_add_menu.php');
       }
       else{
           die(mysqli_error($con));
       }
   }
   $con->close();
   
   ?>
<?php
   include 'config/connection.php';
   
   if(isset($_GET['p_deleteid'])){
       $sub_id=$_GET['p_deleteid'];
   
       $sql2="DELETE from `project` where id=$sub_id";
       $result2 = mysqli_query($con,$sql2);
       if($result2){
           echo "Delete success"; 
          header('location:admin_add_menu.php');
       }
       else{
           die(mysqli_error($con));
       }
   }
   $con->close();
   
   ?>
<?php
   include 'config/connection.php';
   
   if(isset($_GET['fm_deleteid'])){
       $sub_id=$_GET['fm_deleteid'];
   
       $sql3="DELETE from `module` where id=$sub_id";
       $result3 = mysqli_query($con,$sql3);
       if($result3){
           echo "Delete success"; 
          header('location:admin_add_menu.php#contact');
       }
       else{
           die(mysqli_error($con));
       }
   }
   $con->close();
   
   ?>
<?php
   include 'config/connection.php';
   
   if(isset($_GET['t_deleteid'])){
       $sub_id=$_GET['t_deleteid'];
   
       $sql4="DELETE from `tags` where id=$sub_id";
       $result4 = mysqli_query($con,$sql4);
       if($result4){
           echo "Delete success"; 
          header('location:admin_add_tag.php');
       }
       else{
           die(mysqli_error($con));
       }
   }
   $con->close();
   
   ?>
<?php
   include 'config/connection.php';
   
   if(isset($_GET['f_deleteid'])){
       $sub_id=$_GET['f_deleteid'];
   
       $sql5="DELETE from `subject` where id=$sub_id";
       $result5 = mysqli_query($con,$sql5);
       if($result5){
           echo "Delete success"; 
          header('location:list_all_feature.php');
       }
       else{
           die(mysqli_error($con));
       }
   }
   $con->close();
   
   ?>
