<?php ini_set('display_errors', 1); ?>
<?php include('headerfootertemp/head_temp.php') ?>




<div class="col-lg-7 col-md-8 doc-middle-content">
    <div id="post" class="shortcode_info">
        <div class="shortcode_title">
            <a class="btn" href="#">Elements</a>
            <?php                                        
                if (isset($_GET['id'])) {
                    $url_id = $_GET['id'];
                    $sql = "SELECT * FROM subject where ID = $url_id";
                    $res1 = mysqli_query($con,$sql);
                    $count1 = mysqli_num_rows($res1);                               
                    if($count1 > 0){
                        while($row= mysqli_fetch_assoc($res1)){                                            
                        $subject_name = $row['Subject_name'];
                        $subject_description = $row['Description'];                                               
            ?>

                        <h1><?php echo $subject_name; ?></h1>
                        <p><?php echo $subject_description ?></p>
                <?php                                          
                                                                    
                        }
                    }                                                                              
                        } 
                        else{
                            echo "Data not found for the provided ID.";                                        
                            }                                    
                                
                ?>

        </div>

        

        <div class="doc-btm">
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
        </div>
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
            <select id="mySelect" name="os">
                <option value="windows" data-content="<ion-icon name='logo-windows'></ion-icon> Windows"> </option>
                <option value="ios" data-content="<ion-icon name='logo-apple'></ion-icon> Ios"> </option>
                <option value="linux" data-content="<ion-icon name='logo-tux'></ion-icon> Linux"> </option>
            </select>
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