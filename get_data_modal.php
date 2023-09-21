<!-- Main Menu Update start -->
<?php
include 'config/connection.php'; 
 
if(isset($_POST['custId'])){
 $id = $_POST['custId'];
 
 $sql = "SELECT * FROM main_menu where id=$id ";
 $result = mysqli_query($con,$sql);
 
 $response = "<div>";
 while( $row = mysqli_fetch_array($result) ){
 $menu_id = $row['id'];
 $menu_name = $row['title'];
 //$menu_name = "test test";
 $menu_description = $row['description'];
 $menu_url = $row['url'];

 
 $response .= "<form action='get_data_modal.php' method='post'> ";
 $response .= "<div class=''>";

 $response .= "<div class='row'>";
 $response .= "<div class='col-3'>ID : </div><div class='col-3'><input name='modal_id' class='form-control form-control-sm' type='text' value=".$id."></div>";
 $response .= "</div>";
 
 $response .= "<div class='row'>";
 $response .= "<div class='col-3'>".$menu_name." : </div><div class=''><input name='title' class='form-control form-control-sm col-8 ml-3 ' type='text' value=".$menu_name."></div> ";
 $response .= "</div>";

 $response .= "<div class='row'>";
 $response .= "<div class='col-3'>Description : </div>                
                <textarea type='description' name='description'  class='form-control form-control-sm col-8 ml-3 ' style='max-width: 50%;' value=".$menu_description." >$menu_description</textarea>";
 $response .= "</div>";

$response .= "<div class='row'>";
$response .= "<div class='col-3'>URL : </div>
                <div class='col-9'>
                    <input name='url' class='form-control form-control-sm' type='text' value=".$menu_url." >
                    </div>";
$response .= "</div>";

 

 $response .= "</div>";
 $response .= "<div>";
 $response .= "<button type='submit' class='btn btn-primary' name='submit-update-menu' value='submit'>Submit</button>";
 $response .= "</div>";
 $response .= "</form>";
 

 }
 $response .= "</div>";
 
 echo $response;
 $con->close();
 exit;
}

// Main menu update 

        if(isset($_POST['submit-update-menu'])){

        //include 'config/connection.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // collect value of input field
        $menu_id = $_POST['modal_id'];
        $title= $_POST['title'];
        $description=$_POST['description'];
        $main_url=$_POST['url'];

        if (empty($title)) {
            echo "data is empty";
        } else {
            
                if (empty($main_url)) {
                    $sql = "UPDATE main_menu SET title='$title', description='$description' WHERE  id=$menu_id;";
                    $result= mysqli_query($con,$sql);
                } else {
                    $sql = "UPDATE main_menu SET title='$title', description='$description', url='$main_url' WHERE  id=$menu_id;";
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
                                                

 
 $response2 .= "<form action='get_data_modal.php' method='post'> ";
 $response2 .= "<div class=''>";

 $response2 .= "<div class='row'>";
 $response2 .= "<div class='col-3'>ID : </div><div class='col-3'><input name='modal_id' class='form-control form-control-sm' type='text' value=".$p_id."></div>";
 $response2 .= "</div>";

 
 $response2 .= "<div class='row'>";
 $response2 .= "<div class='col-4'>Title : </div><div class='col-3'><input name='title' class='form-control form-control-sm' type='text' value=".$p_name." ></div>";
 $response2 .= "</div>";

 $response2 .= "<div class='row'>";
 $response2 .= "<div class='col-4'>Description : </div>                
                <textarea type='description' name='description' ' class='form-control form-control-sm col-8 ml-3 ' style='max-width: 50%;' value=".$p_description." >$p_description</textarea>";
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
$response2 .= "<div class='col-4'>Main Menu id: </div>
                <div class='col-8'>
                    <input name='main_menu_id' class='form-control form-control-sm' type='text' value=".$p_main_menu_id." >
                    </div>";
$response2 .= "</div>";

 

 $response2 .= "</div>";
 $response2 .= "<div>";
 $response2 .= "<button type='submit' class='btn btn-primary' name='submit-update-project' value='submit'>Submit</button>";
 $response2 .= "</div>";
 $response2 .= "</form>";
 

 }
 $response2 .= "</div>";
 
 echo $response2;
 exit;
}

                            if(isset($_POST['submit-update-project'])){
                        
                                //include 'config/connection.php';
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                
                                    // collect value of input field
                                    $id = $_POST['modal_id'];
                                    $Project_name= $_POST['title'];
                                    $Description=$_POST['description'];
                                    $main_menu_id=$_POST['main_menu_id'];
                                    //$project_url=$_POST['url'];
                                
                                    if (empty($Project_name)) {
                                        echo "data is empty";
                                    } else {
                                        $sql= "UPDATE project SET Project_name='$Project_name', Description='$Description', main_menu_id='$main_menu_id' WHERE  ID=$id;";
                                        
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
                                                

 
 $response3 .= "<form action='get_data_modal.php' method='post'> ";
 $response3 .= "<div class=''>";

 $response3 .= "<div class='row'>";
 $response3 .= "<div class='col-3'>ID : </div><div class='col-3'><input name='modal_id' class='form-control form-control-sm' type='text' value=".$m_id."></div>";
 $response3 .= "</div>";

 $response3 .= "<div class='row'>";
 $response3 .= "<div class='col-3'>Title : </div><div class='col-3'><input name='title' class='form-control form-control-sm' type='text' value=".$m_name." ></div>";
 $response3 .= "</div>";

 $response3 .= "<div class='row'>";
 $response3 .= "<div class='col-3'>Description : </div>                
                <textarea type='description' name='description' ' class='form-control form-control-sm col-8 ml-3 ' style='max-width: 50%;' value=".$m_description." >$m_description</textarea>";
 $response3 .= "</div>";

 $response3 .= "<div class='row'>";
 $response3 .= "<div class='col-3'>Project ID : </div><div class='col-3'><input name='Project_id' class='form-control form-control-sm' type='text' value=".$m_Project_id." ></div>";
 $response3 .= "</div>";

 

 $response3 .= "</div>";
 $response3 .= "<div>";
 $response3 .= "<button type='submit' class='btn btn-primary' name='submit-update-feature' value='submit'>Submit</button>";
 $response3 .= "</div>";
 $response3 .= "</form>";
 

 }
 $response3 .= "</div>";
 
 echo $response3;
 exit;
}

                            if(isset($_POST['submit-update-feature'])){
                        
                                //include 'config/connection.php';
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                
                                    // collect value of input field
                                    $id = $_POST['modal_id'];
                                    $Module_name= $_POST['title'];
                                    $Description=$_POST['description'];
                                    $Project_id=$_POST['Project_id'];
                                    $module_url=$_POST['url'];
                                
                                    if (empty($Module_name)) {
                                        echo "data is empty";
                                    } else {
                                        $sql= "UPDATE module SET Module_name='$Module_name', Description='$Description', project_id='$Project_id' WHERE  ID=$id;";
                                        
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
                                             
                                                

 
 $response4 .= "<form action='get_data_modal.php' method='post'> ";
 $response4 .= "<div class=''>";

 $response4 .= "<div class='row'>";
 $response4 .= "<div class='col-3'>ID : </div><div class='col-3'><input name='modal_id' class='form-control form-control-sm' type='text' value=".$t_id."></div>";
 $response4 .= "</div>";
 
 $response4 .= "<div class='row'>";
 $response4 .= "<div class='col-3'>Title : </div><div class='col-3'><input name='title' class='form-control form-control-sm' type='text' value=".$t_name." ></div>";
 $response4 .= "</div>";

 $response4 .= "<div class='row'>";
 $response4 .= "<div class='col-3'>Description : </div>                
                <textarea type='description' name='description' ' class='form-control form-control-sm col-8 ml-3 ' style='max-width: 50%;' value=".$t_description." >$t_description</textarea>";
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



