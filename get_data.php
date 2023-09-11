<?php
include 'config/connection.php'; 
 
if(isset($_POST['custId'])){
 $id = $_POST['custId'];
 
 $sql = "SELECT * FROM main_menu where id=$id ";
 $result = mysqli_query($con,$sql);
 
 $response = "<div>";
 while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $name = $row['title'];
 $description = $row['description'];

 
 $response .= "<form action='get_data.php' method='post'> ";
 $response .= "<div class=''>";

 $response .= "<div class='row'>";
 $response .= "<div class='col-3'>ID : </div><div class='col-3'><input name='modal_id' class='form-control form-control-sm' type='text' value=".$id."></div>";
 $response .= "</div>";
 
 $response .= "<div class='row'>";
 $response .= "<div class='col-3'>Title : </div><div class='col-3'><input name='title' class='form-control form-control-sm' type='text' value=".$name." ></div>";
 $response .= "</div>";

 $response .= "<div class='row'>";
 $response .= "<div class='col-3'>Description : </div>                
                <textarea type='description' name='description' ' class='form-control form-control-sm col-9' value=".$description." >$description</textarea>";
 $response .= "</div>";

$response .= "<div class='row'>";
$response .= "<div class='col-3'>URL : </div>
                <div class='col-9'>
                    <input name='url' class='form-control form-control-sm' type='text' value=".$name." >
                    </div>";
$response .= "</div>";

 

 $response .= "</div>";
 $response .= "<div>";
 $response .= "<button type='submit' class='btn btn-primary' name='submit-update' value='submit'>Submit</button>";
 $response .= "</div>";
 $response .= "</form>";
 

 }
 $response .= "</div>";
 
 echo $response;
 exit;
}
?>
<?php
                            if(isset($_POST['submit-update'])){
                        
                                //include 'config/connection.php';
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                
                                    // collect value of input field
                                    $id = $_POST['modal_id'];
                                    $title= $_POST['title'];
                                    $description=$_POST['description'];
                                    $main_url=$_POST['url'];
                                
                                    if (empty($title)) {
                                        echo "data is empty";
                                    } else {
                                        $sql= "UPDATE main_menu SET  title = '$title', description = '$description', url='$main_url' where id = $id";
                                       // UPDATE `k_b`.`main_menu` SET `description`='ss' WHERE  `id`=4;
                                        $result= mysqli_query($con,$sql);
                                    }
                                }}
                                // Closing the connection.
                               $con->close();
                               header("Location: /Knowledge_Base/admin_add_menu.php");
                                ?>


