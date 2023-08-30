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


?>
