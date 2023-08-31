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

    if(isset($_GET['deleteid'])){
        $sub_id=$_GET['deleteid'];

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
