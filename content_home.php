<?php ini_set('display_errors', 0); ?>
<?php include('headerfootertemp/head_temp.php') ?>
<?php
   // Include the database configuration
   include 'config/connection.php'; ?>
<?php
   // Include the database configuration
   include 'config/connection.php';
   $Url_id = $_GET['project_id'];
   $m_Url_id = $_GET['module_id'];
   
   
   // Fetch menu items from the database
   //$sql = "SELECT subject.* , tags.Tag_name FROM subject LEFT JOIN tags ON subject.Tagged_id = tags.ID where subject.ID = $Url_id";
   
   
   ?>
<div class="col-lg-7 col-md-8 doc-middle-content">
   <div id="post" class="shortcode_info">
      <?php   
         if (isset($_GET['module_id'])) {
            $sql = "SELECT subject.* , tags.Tag_name FROM subject LEFT JOIN tags ON subject.Tagged_id = tags.ID where Module_id = $m_Url_id";
            $res = mysqli_query($con,$sql);
            $count = mysqli_num_rows($res);
            
                if($count > 0){
                    while($row= mysqli_fetch_assoc($res)){
                        $id = $row['ID'];
                        $all_subject = $row['Subject_name'];
                        $a_porject_Description = $row['Description'];
                        $Element = $row['Tag_name'];
                        ?>
      <div class="shortcode_title">
         <a class="btn" href="#"><?php //echo $Element ?></a>
         <h1> <?php echo $all_subject ?></h1>
         <p> <?php echo $a_porject_Description ?></p>
      </div>
      <?php                                     
         }
             }
                                     
                 }        
                                            
                          elseif(isset($_GET['project_id'])){                             
                                
                                         $m_Url_id = $_GET['project_id'];
                                         $sql2 = "SELECT * from module WHERE project_id = $m_Url_id";
                                         $res2 = mysqli_query($con,$sql2);
                                         $count = mysqli_num_rows($res2);
                                         if($count > 0){
                                             while($row2= mysqli_fetch_assoc($res2)){
                                                 $m_id = $row2['ID'];
                                                 $m_porject_name = $row2['Module_name'];
                                                 $m_porject_Description = $row2['Description'];
                                                 //$Element = $row['Tag_name'];
                                                 ?>
      <div class="shortcode_title">
         <h1> <?php echo $m_porject_name ?></h1>
      </div>
      <?php                                     
         }
         }
         
         }
         else{
         echo "no";
         }
         
         
         
         
         ?>
      <div class="doc-btm">
         <ul class="nav card_tagged">
            <li>Tagged: </li>
            <li><a href="#">content</a></li>
            <li><a href="#">elements</a></li>
            <li><a href="#">subscription</a></li>
         </ul>
      </div>
   </div>
</div>
<div class="col-lg-2 col-md-4 doc_right_mobile_menu">
   <div class="open_icon" id="right">
      <i class="arrow_carrot-left"></i>
      <i class="arrow_carrot-right"></i>
   </div>
   <div class="doc_rightsidebar scroll">
      <div class="pageSideSection">
         <!-- <select id="mySelect" name="os">
            <option value="windows" data-content="<ion-icon name='logo-windows'></ion-icon> Windows"> </option>
            <option value="ios" data-content="<ion-icon name='logo-apple'></ion-icon> Ios"> </option>
            <option value="linux" data-content="<ion-icon name='logo-tux'></ion-icon> Linux"> </option>
            </select> -->
         <div id="font-switcher" class="d-flex justify-content-between align-items-center">
            <div id="rvfs-controllers" class="fontsize-controllers group"></div>
            <a href="javascript:window.print()" class="print"><i class="icon_printer"></i></a>
         </div>
         <div class="table-of-content">
            <h6><i class="icon_ul"></i> CONTENTS</h6>
            <nav class="list-unstyled doc_menu" id="navbar-example3">
            </nav>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</section>
<!--================End Topic Area =================-->
<?php include('headerfootertemp/footer_temp.php') ?>
