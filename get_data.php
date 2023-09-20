<!-- Main Menu Update start -->
<?php
include 'config/connection.php'; 
 
if(isset($_POST['custId'])){
 $id = $_POST['custId'];
 
 $sql = "SELECT * FROM main_menu where id=$id ";
 $result = mysqli_query($con,$sql);
 
 $response = "<div>";
 while( $row = mysqli_fetch_array($result) ){
 //$id = $row['id'];
 $name = $row['title'];
 $description = $row['description'];
 $url = $row['url'];

 
 $response .= "<form action='get_data.php' method='post'> ";
 $response .= "<div class=''>";
/*
 $response .= "<div class='row'>";
 $response .= "<div class='col-3'>ID : </div><div class='col-3'><input name='modal_id' class='form-control form-control-sm' type='text' value=".$id."></div>";
 $response .= "</div>";
 */
 $response .= "<div class='row'>";
 $response .= "<div class='col-3'>Title : </div><div class='col-3'><input name='title' class='form-control form-control-sm' type='text' value=".$name." ></div>";
 $response .= "</div>";

 $response .= "<div class='row'>";
 $response .= "<div class='col-3'>Description : </div>                
                <textarea type='description' name='description'  class='form-control form-control-sm col-9' value=".$description." >$description</textarea>";
 $response .= "</div>";

$response .= "<div class='row'>";
$response .= "<div class='col-3'>URL : </div>
                <div class='col-9'>
                    <input name='url' class='form-control form-control-sm' type='text' value=".$url." >
                    </div>";
$response .= "</div>";

 

 $response .= "</div>";
 $response .= "<div>";
 $response .= "<button href='delete.php' type='submit' class='btn btn-primary' name='submit-update' value='submit'>Submit</button>";
 $response .= "</div>";
 $response .= "</form>";
 

 }
 $response .= "</div>";
 
 echo $response;
 $con->close();
 exit;
}

// Main menu update 

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
            
                if (empty($main_url)) {
                    $sql= "INSERT into main_menu (title, description) VALUES ('$title','$description')";
                    $result= mysqli_query($con,$sql);
                } else {
                    $sql= "INSERT into main_menu (title, description, url) VALUES ('$title','$description',  '$main_url')";
                    $result= mysqli_query($con,$sql);
        }
        }
        }
        header("Location: /Knowledge_Base/admin_add_menu.php");}
        // Closing the connection.
        $con->close();
       // 
                                
?>


<!-- Sub menu update -->
<?php
include 'config/connection.php'; 

if(isset($_POST['subid'])){
 $p_id = $_POST['subid'];
 
 $sql3 = "SELECT * FROM project where id=$p_id ";
 $result3 = mysqli_query($con,$sql3);
 
 $response2 = "<div>";
 while( $row3 = mysqli_fetch_array($result3) ){
                                              //  $p_id = $row3['ID'];
                                                $p_name = $row3['Project_name'];
                                                $p_description = $row3['Description'];
                                                $p_main_menu_id = $row3['main_menu_id'];
                                                $p_url = $row3['url'];
                                                

 
 $response2 .= "<form action='get_data.php' method='post'> ";
 $response2 .= "<div class=''>";
/*
 $response2 .= "<div class='row'>";
 $response2 .= "<div class='col-3'>ID : </div><div class='col-3'><input name='modal_id' class='form-control form-control-sm' type='text' value=".$p_id."></div>";
 $response2 .= "</div>";
 */
 
 $response2 .= "<div class='row'>";
 $response2 .= "<div class='col-3'>Title : </div><div class='col-3'><input name='title' class='form-control form-control-sm' type='text' value=".$p_name." ></div>";
 $response2 .= "</div>";

 $response2 .= "<div class='row'>";
 $response2 .= "<div class='col-3'>Description : </div>                
                <textarea type='description' name='description' ' class='form-control form-control-sm col-9' value=".$p_description." >$p_description</textarea>";
 $response2 .= "</div>";
/*
$response2 .= "<div class='row'>";
$response2 .= "<div class='col-3'>URL : </div>
                <div class='col-9'>
                    <input name='url' class='form-control form-control-sm' type='text' value=".$p_url." >
                    </div>";
$response2 .= "</div>";
*/
$response2 .= "<div class='row'>";
$response2 .= "<div class='col-3'>main_menu_id: </div>
                <div class='col-9'>
                    <input name='main_menu_id' class='form-control form-control-sm' type='text' value=".$p_main_menu_id." >
                    </div>";
$response2 .= "</div>";

 

 $response2 .= "</div>";
 $response2 .= "<div>";
 $response2 .= "<button type='submit' class='btn btn-primary' name='submit-update' value='submit'>Submit</button>";
 $response2 .= "</div>";
 $response2 .= "</form>";
 

 }
 $response2 .= "</div>";
 
 echo $response2;
 exit;
}

                            if(isset($_POST['submit-update'])){
                        
                                //include 'config/connection.php';
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                
                                    // collect value of input field
                                    $id = $_POST['ID'];
                                    $Project_name= $_POST['Project_name'];
                                    $Description=$_POST['Description'];
                                    $main_menu_id=$_POST['main_menu_id'];
                                    $project_url=$_POST['url'];
                                
                                    if (empty($title)) {
                                        echo "data is empty";
                                    } else {
                                        $sql= "UPDATE project SET  Project_name = '$Project_name', Description = '$Description', url='$project_url' where ID = $id";
                                       // UPDATE `k_b`.`main_menu` SET `description`='ss' WHERE  `id`=4;
                                        $result= mysqli_query($con,$sql);
                                    }
                                }
                                header("Location: /Knowledge_Base/admin_add_menu.php");
                            }
                                // Closing the connection.
                               $con->close();
                               
                                ?>


<!-- Sub Menu Update end -->


<!-- FEAture menu update -->
<?php
include 'config/connection.php'; 

if(isset($_POST['feaid'])){
 $m_id = $_POST['feaid'];
 
 $sql4 = "SELECT * FROM module where id=$m_id";
 $result4 = mysqli_query($con,$sql4);
 
 $response3 = "<div>";
 while( $row4 = mysqli_fetch_array($result4) ){
                                             //   $m_id = $row4['ID'];
                                                $m_name = $row4['Module_name'];
                                                $m_description = $row4['Description'];
                                                $m_Project_id = $row4['project_id'];
                                              //  $m_url = $row4['url'];
                                                

 
 $response3 .= "<form action='get_data.php' method='post'> ";
 $response3 .= "<div class=''>";
/*
 $response3 .= "<div class='row'>";
 $response3 .= "<div class='col-3'>ID : </div><div class='col-3'><input name='modal_id' class='form-control form-control-sm' type='text' value=".$m_id."></div>";
 $response3 .= "</div>";
 */
 $response3 .= "<div class='row'>";
 $response3 .= "<div class='col-3'>Title : </div><div class='col-3'><input name='title' class='form-control form-control-sm' type='text' value=".$m_name." ></div>";
 $response3 .= "</div>";

 $response3 .= "<div class='row'>";
 $response3 .= "<div class='col-3'>Description : </div>                
                <textarea type='description' name='description' ' class='form-control form-control-sm col-9' value=".$m_description." >$m_description</textarea>";
 $response3 .= "</div>";
/*
$response3 .= "<div class='row'>";
$response3 .= "<div class='col-3'>URL : </div>
                <div class='col-9'>
                    <input name='url' class='form-control form-control-sm' type='text' value=".$m_Project_id." >
                    </div>";
$response3 .= "</div>";
*/

 

 $response3 .= "</div>";
 $response3 .= "<div>";
 $response3 .= "<button type='submit' class='btn btn-primary' name='submit-update' value='submit'>Submit</button>";
 $response3 .= "</div>";
 $response3 .= "</form>";
 

 }
 $response3 .= "</div>";
 
 echo $response3;
 exit;
}

                            if(isset($_POST['submit-update'])){
                        
                                //include 'config/connection.php';
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                
                                    // collect value of input field
                                    $id = $_POST['ID'];
                                    $Module_name= $_POST['Module_name'];
                                    $Description=$_POST['Description'];
                                    $Project_id=$_POST['Project_id'];
                                    $module_url=$_POST['url'];
                                
                                    if (empty($title)) {
                                        echo "data is empty";
                                    } else {
                                        $sql= "UPDATE project SET  Module_name = '$Module_name', Description = '$Description', url='$module_url' where ID = $id";
                                       // UPDATE `k_b`.`main_menu` SET `description`='ss' WHERE  `id`=4;
                                        $result= mysqli_query($con,$sql);
                                    }
                                }
                                header("Location: /Knowledge_Base/admin_add_menu.php");
                            }
                                // Closing the connection.
                               $con->close();
                               
                                ?>


<!-- FEAture Menu Update end -->


<!-- TAG menu update -->
<?php
include 'config/connection.php'; 

if(isset($_POST['tagid'])){
 $t_id = $_POST['tagid'];
 
 $sql5 = "SELECT * FROM tags where id=$t_id";
 $result5 = mysqli_query($con,$sql5);
 
 $response4 = "<div>";
 while( $row5 = mysqli_fetch_array($result5) ){
                                                $t_id = $row5['ID'];
                                                $t_name = $row5['Tag_name'];
                                                $t_description = $row5['Description'];
                                             
                                                

 
 $response4 .= "<form action='get_data.php' method='post'> ";
 $response4 .= "<div class=''>";

 $response4 .= "<div class='row'>";
 $response4 .= "<div class='col-3'>ID : </div><div class='col-3'><input name='modal_id' class='form-control form-control-sm' type='text' value=".$t_id."></div>";
 $response4 .= "</div>";
 
 $response4 .= "<div class='row'>";
 $response4 .= "<div class='col-3'>Title : </div><div class='col-3'><input name='title' class='form-control form-control-sm' type='text' value=".$t_name." ></div>";
 $response4 .= "</div>";

 $response4 .= "<div class='row'>";
 $response4 .= "<div class='col-3'>Description : </div>                
                <textarea type='description' name='description' ' class='form-control form-control-sm col-9' value=".$t_description." >$t_description</textarea>";
 $response4 .= "</div>";
/*
$response3 .= "<div class='row'>";
$response3 .= "<div class='col-3'>URL : </div>
                <div class='col-9'>
                    <input name='url' class='form-control form-control-sm' type='text' value=".$m_Project_id." >
                    </div>";
$response3 .= "</div>";
*/
 

 $response4 .= "</div>";
 $response4 .= "<div>";
 $response4 .= "<button type='submit' class='btn btn-primary' name='tag-update' value='submit'>Submit</button>";
 $response4 .= "</div>";
 $response4 .= "</form>";
 

 }
 $response4 .= "</div>";
 
 echo $response4;
 exit;
}

                            if(isset($_POST['tag-update'])){
                        
                                //include 'config/connection.php';
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                
                                    // collect value of input field
                                    $id = $_POST['modal_id'];
                                    $Tag_name= $_POST['title'];
                                    $Description=$_POST['description'];
                                
                                
                                    if (empty($Tag_name)) {
                                        echo "data is empty";
                                    } else {
                                        $sql= "UPDATE tags SET  Tag_name = '$Tag_name', DESCRIPTION = '$Description' where ID = $id";
                                     
                                        $result= mysqli_query($con,$sql);
                                    }
                                }
                                header("Location: /Knowledge_Base/admin_add_tag.php");
                            }
                                // Closing the connection.
                               $con->close();
                               
                                ?>


<!-- TAG Menu Update end -->



