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

<?php

    include 'config/connection.php';

    if(isset($_GET['deleteid'])){
        $sub_id=$_GET['deleteid'];

        $sql3="DELETE from `module` where id=$id";
        $result3 = mysqli_query($con,$sql3);
        if($result3){
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

if(isset($_GET['deleteid'])){
    $sub_id=$_GET['deleteid'];

    $sql4="DELETE from `tags` where id=$id";
    $result4 = mysqli_query($con,$sql4);
    if($result4){
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

if(isset($_GET['deleteid'])){
    $sub_id=$_GET['deleteid'];

    $sql5="DELETE from `tags` where id=$id";
    $result5 = mysqli_query($con,$sql5);
    if($result5){
        echo "Delete success"; 
       header('location:admin_add_tag.php');
    }
    else{
        die(mysqli_error($con));
    }
}
$con->close();

?>