<?php include('HeaderFooterTemp\index_header.php') ?>
<section class="doc_documentation_area" id="sticky_doc">
   <div class="overlay_bg"></div>
   <div class="container custom_container">
      <div class="col-lg-12">
         <article id="post" class="documentation_info">
            <div class="documentation_body" id="documentation">
               <div class="shortcode_title">
                  <h1>Project Documentation</h1>
                  <p><span>Welcome to Documentation</span> Get familiar with Projects and explore their features:</p>
               </div>
               <div class="row">
                  <?php
                     include 'config/connection.php';
                     $sql = "SELECT * FROM project";
                     $res = mysqli_query($con,$sql);
                     $count = mysqli_num_rows($res);
                     ?>
                  <?php
                     if($count > 0){
                         while($row= mysqli_fetch_assoc($res)){
                             $id = $row['ID'];
                             $Project_name = $row['Project_name'];
                             $Project_Description = $row['Description'];
                             $Project_url = $row['url'];
                             ?>
                  <div class="col-xl-4 col-sm-6">
                     <div class="media documentation_item">
                        <div class="icon">
                           <img src="img/home_one/icon/folder.png" alt="">
                        </div>
                        <div class="media-body">
                           <a href="<?php echo $Project_url?>.php?project_id=<?php echo $id ?>">
                              <h5> <?php echo $Project_name; ?></h5>
                           </a>
                           <p><?php echo $Project_Description; ?></p>
                        </div>
                     </div>
                  </div>
                  <?php
                     }
                     }
                     ?>           
               </div>
            </div>
         </article>
      </div>
   </div>
   </div>
</section>
<?php include('headerfootertemp/footer_temp.php') ?>
</body>
</html>
