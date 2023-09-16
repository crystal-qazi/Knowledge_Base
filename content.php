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

                                    
                                   
                                        }
                                    
                                    }
                              
          

                                if (isset($_GET['project_id'])) {
                                    $p_url_id = $_GET['project_id'];
                                    $sql1 = "SELECT * FROM project LEFT JOIN module ON module.project_id = project.id WHERE project.id = $p_url_id";
                                    $res2 = mysqli_query($con,$sql1);
                                    $count = mysqli_num_rows($res2);


                                        if (isset($_GET['project_id'])) {
                                            if($count > 0){
                                                while($row= mysqli_fetch_assoc($res2)){
                                                    $id2 = $row['ID'];
                                                    $porject_name2 = $row['Module_name'];
                                                    $porject_Description2 = $row['Description'];                                       
                                                                
                                            ?>
        <div class="col-lg-12">
            <article id="post" class="documentation_info">
                <div class="documentation_body" id="documentation">

                    <div class="row">
                        <div class="col-xl-4 col-sm-6">

                            <div class="media documentation_item">
                                <div class="icon">
                                    <img src="img/home_one/icon/folder.png" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5>
                                            <?php echo $porject_name2; ?>
                                        </h5>
                                    </a>
                                    <p>Modules</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </article>
        </div>

    </div>

    <?php    
                                                                                
                                            }
                                        }                            
                                  else
                                  {   

                                    
                                   
                                    
                                    }
                                  }                                  
                                }
                                    
                                ?>







    <!-- <div class="doc-btm">
        <ul class="nav card_tagged">
            <li>Tagged: </li>
            <li><a href="#">content</a></li>
            <li><a href="#">elements</a></li>
            <li><a href="#">subscription</a></li>
        </ul>
        <footer class="help_text" id="help">
            <div class="border_bottom"></div>
            <div class="row feedback_link">
                <div class="col-lg-6">
                    <h6><i class="icon_mail_alt"></i>Still stuck?
                        <a href="#" data-toggle="modal" data-target="#exampleModal3">How can we help?</a>
                    </h6>
                </div>
                <div class="col-lg-6">
                    <p>Was this page helpful?
                        <a href="#" class="h_btn">Yes <span>5</span></a>
                        <a href="#" class="h_btn red">No <span>3</span></a>
                    </p>
                </div>
            </div>
        </footer>
    </div> -->
</div>
<div class="row topic_item_tabs inner_tab_list">
    <div class="col-lg-6">
        <div class="topic_list_item">
            <h4>Related articles</h4>
            <ul class="navbar-nav">
                <li><a href="#"><i class="icon_document_alt"></i>Accordions Widget</a></li>
                <li><a href="#"><i class="icon_document_alt"></i>Notice / Message Widget</a>
                </li>
                <li><a href="#"><i class="icon_document_alt"></i>Cheatsheet</a></li>
                <li><a href="#"><i class="icon_document_alt"></i>Image Hotspots Widget</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="topic_list_item">
            <h4>Recently viewed articles</h4>
            <ul class="navbar-nav">
                <li><a href="#"><i class="icon_document_alt"></i>Tabs Widget</a></li>
                <li><a href="#"><i class="icon_document_alt"></i>Notice / Message Widget</a>
                </li>
                <li><a href="#"><i class="icon_document_alt"></i>Cheatsheet</a></li>
                <li><a href="#"><i class="icon_document_alt"></i>Image Hotspots Widget</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="comment_inner">
    <h2 class="c_head">3 Comment</h2>
    <ul class="comment_box list-unstyled">
        <li class="post_comment">
            <div class="media comment_author">
                <img class="img_rounded" src="img/blog-single/comment_01.jpg" alt="">
                <div class="media-body">
                    <div class="comment_info">
                        <h3>Issac Wise</h3>
                        <div class="comment_date">July 3, 2020 at 2:14 pm</div>
                    </div>
                    <p>Wouldn’t it be better practice to use get_the_title(..) in this case?
                        directly accessing the post object’s data member would bypass
                        applying filters and enforcing protected and private settings,
                        unless that’s explicitly desired.</p>
                    <a href="#" class="comment_reply">Reply <i class="arrow_right"></i></a>
                </div>
            </div>
            <ul class="list-unstyled reply_comment">
                <li>
                    <div class="media comment_author">
                        <img class="img_rounded" src="img/blog-single/comment_02.jpg" alt="">
                        <div class="media-body">
                            <div class="comment_info">
                                <h3>Hans Down</h3>
                                <div class="comment_date">44 mins ago</div>
                            </div>
                            <p>Thenks Demo User for Wouldn’t it be better practice to use
                                get_the_title.</p>
                            <a href="#" class="comment_reply">Reply <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media comment_author">
                        <img class="img_rounded" src="img/blog-single/comment_03.jpg" alt="">
                        <div class="media-body">
                            <div class="comment_info">
                                <h3>Hans Down</h3>
                                <div class="comment_date">44 mins ago</div>
                            </div>
                            <p>Dropped a clanger up the kyver easy peasy vagabond victoria
                                sponge Charles tinkety tonk old fruit argy.!</p>
                            <a href="#" class="comment_reply">Reply <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="post_comment">
            <div class="media comment_author">
                <img class="img_rounded" src="img/blog-single/comment_01.jpg" alt="">
                <div class="media-body">
                    <div class="comment_info">
                        <h3>Chauffina Carr</h3>
                        <div class="comment_date">04 mins ago</div>
                    </div>
                    <p>Wouldn’t it be better practice to use get_the_title(..) in this case?
                        directly accessing the post object’s data member would bypass
                        applying filters and enforcing protected and private settings,
                        unless that’s explicitly desired.</p>
                    <a href="#" class="comment_reply">Reply <i class="arrow_right"></i></a>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="blog_comment_box topic_comment">
    <h2 class="c_head">Leave a Reply</h2>
    <p>Your email address will not be published. Required fields are marked *</p>
    <form class="get_quote_form row" action="#" method="post">
        <div class="col-md-6 form-group">
            <input type="text" class="form-control" id="name" required>
            <label class="floating-label">Full Name *</label>
        </div>
        <div class="col-md-6 form-group">
            <input type="email" class="form-control" id="email" required>
            <label class="floating-label">Email *</label>
        </div>
        <div class="col-md-12 form-group">
            <input type="text" class="form-control" id="web" required>
            <label class="floating-label">Website (Optional)</label>
        </div>
        <div class="col-md-12 form-group">
            <textarea class="form-control message" required></textarea>
            <label class="floating-label">Comment type...</label>
        </div>
        <div class="col-md-12 form-group check_input">
            <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
            <label for="fruit1">Save my name, email, and website in this browser for the
                next time I comment.</label>
        </div>
        <div class="col-md-12 form-group"><button class="btn action_btn thm_btn" type="submit">Post
                Comment</button></div>
    </form>
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