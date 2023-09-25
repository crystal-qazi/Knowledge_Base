<?php ini_set('display_errors', 0); ?>
<?php include('headerfootertemp/head_temp.php') ?>
<?php
   // Include the database configuration
   include 'config/connection.php'; ?>
<?php
   // Include the database configuration
   include 'config/connection.php';
   $Url_id = $_GET['subject_id'];
   $p_url_id = $_GET['project_id'];
   // Fetch menu items from the database
   
   
   
   
   
   ?>
<div class="col-lg-7 col-md-8 doc-middle-content">
   <div id="post" class="shortcode_info">
      <?php    
         if (isset($_GET['subject_id'])) {
             $sql = "SELECT subject.* , tags.Tag_name FROM subject LEFT JOIN tags ON subject.Tagged_id = tags.ID where subject.ID = $Url_id";
             $res = mysqli_query($con,$sql);
             $count = mysqli_num_rows($res); 
             if($count > 0){
                 while($row= mysqli_fetch_assoc($res)){
                     $id = $row['ID'];
                     $porject_name = $row['Subject_name'];
                     $porject_Description = $row['Description'];
                     $Element = $row['Tag_name'];
                     ?>
      <div class="shortcode_title">
         <a class="btn" href="#">
         <?php echo $Element ?>
         </a>
         <h1>
            <?php echo $porject_name ?>
         </h1>
         <p>
            <?php echo $porject_Description ?>
         </p>
      </div>
      <?php                                     
         }
         }                                    
         else
         {   
         
         echo "no";
         
         }
         
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
