<?php
function deletesub_menu() {
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql2="DELETE from `project` where id=$id";
        $result2 = mysqli_query($con,$sql2);
        if($result2){
           // echo "Delete success"; 
           header('location:admin_add_menu.php');
        }
        else{
            die(mysqli_error($con));
        }
    }
  }

function inserting_project_sub_menu(){
    if(isset($_POST['submit'])){
                                                    
        $UID= $_POST['UID'];
        $Project_name=$_POST['Project_name'];
        $Description=$_POST['Description'];
        $main_menu_id=$_POST['main_menu_id'];

        $sql = "INSERT into project (UID, Project_name,Description,main_menu_id) VALUES ('$UID','$Project_name','$Description', '$main_menu_id');";
        $result= mysqli_query($con,$sql);

        if($result){
            header('location:admin_add_menu.php');
            //echo "Data inseted successfully";
        }
        else{
            die(mysqli_error($con));
        }
    }

}
?>
