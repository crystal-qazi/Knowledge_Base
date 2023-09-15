<?php
include 'config/connection.php';

if (!empty($_POST["project"])) {
    $projectID = $_POST["project"];
    $query = "  SELECT * FROM module WHERE project_id = $projectID";
    $result1=mysqli_query($con,$query);  
        ?>


        <option value="">Select Module</option>
 <?php
        if(!empty($result1)){
            while($row=mysqli_fetch_assoc($result1)){
                 $p_id=$row['ID'];
                 $p_name=$row['Module_name'];
                 
                
                 ?>
         <option value="<?php echo $p_id; ?>"><?php echo $p_name;?></option>
        <?php }
                } else{  ?>
                    <option value="">Note found</option> 
                    <?php
               }
            }
?>

<?php 
if (!empty($_POST["project2"])) {
    $projectID = $_POST["project2"];
    $query = "  SELECT main_menu_id, main_menu.title FROM project left join main_menu on main_menu.id = project.main_menu_id WHERE project.ID = $projectID";
    $result2=mysqli_query($con,$query);  
        ?>


        <!-- <option value="">Select Module</option> -->
 <?php
        if(!empty($result2)){
            while($row2=mysqli_fetch_assoc($result2)){
                 $m_id=$row2['main_menu_id'];
                 $m_name=$row2['title'];
                 
                
                 ?>
         <option value="<?php echo $m_id; ?>"><?php echo $m_name;?></option>
        <?php }
                } else{  ?>
                    <option value="">Note found</option> 
                    <?php
               }
            }
?>