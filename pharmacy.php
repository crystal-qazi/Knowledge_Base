<?php include('headerfootertemp/head_temp.php') ?>
<?php
// Include the database configuration
include 'config/connection.php';

// Fetch menu items from the database

?>

        <section class="page_breadcrumb">
            <div class="container custom_container">
                <div class="row">
                    <div class="col-sm-7">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Docs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Docy WordPress Theme</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-sm-5">
                        <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on March 03, 2020</a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Forum Breadcrumb Area =================-->

        <!--================Topic Area =================-->
        <section class="doc_documentation_area" id="sticky_doc">
            <div class="overlay_bg"></div>
            <div class="container custom_container">
                <div class="row">
                    <div class="col-lg-3 doc_mobile_menu display_none">
                        <aside class="doc_left_sidebarlist">
                            <div class="open_icon" id="left">
                                <i class="arrow_carrot-right"></i>
                                <i class="arrow_carrot-left"></i>
                            </div>
                            <div class="scroll">
                                <ul class="list-unstyled nav-sidebar">
                                    <li class="nav-item">
                                        <a href="doc-main.html" class="nav-link"><img src="img/side-nav/home.png" alt="">Home</a>
                                    </li>
                                    
                                    <li class="nav-item active">
                                        <a href="doc-main.html" class="nav-link"><img src="img/side-nav/briefcase.png" alt="briefcase">My Prescription</a>
                                        <span class="icon"><i class="arrow_carrot-down"></i></span>
                                        <ul class="list-unstyled dropdown_nav">
                                        <?php   
                                                $sql = "SELECT * FROM subject";
                                                $res = mysqli_query($con,$sql);
                                                $count = mysqli_num_rows($res);
                                                    if($count > 0){
                                                        while($row= mysqli_fetch_assoc($res)){
                                                            $id = $row['ID'];
                                                            $module = $row['Subject_name'];
                                                            ?>
                                    <li><a  href="<?php echo connection.php?>doc-element-accordion.php" ><?php echo $module ?> </a></li>
                                                <?php
                                            
                                                                      
                                        }
                                    }
                                ?>
                                           <li><a href="doc-element-code.html">Source Code</a></li>
                                            <li><a href="doc-content-tooltip.html">Tooltip</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="typography.html" class="nav-link"><img src="img/side-nav/document.png" alt="">Manage Patients</a>
                                        <span class="icon"><i class="arrow_carrot-down"></i></span>
                                        <ul class="list-unstyled dropdown_nav">
                                        <?php    
                                        $sql = "SELECT * FROM subject";
                                        $res1 = mysqli_query($con,$sql);
                                        $count1 = mysqli_num_rows($res1);
                                        if($count1 > 0){
                                            while($row= mysqli_fetch_assoc($res1)){
                                                $id = $row['ID'];
                                                $subject = $row['Subject_name'];
                                                ?>
                                                <li><a  href="<?php echo connection.php?>doc-element-accordion.php" ><?php echo $subject ?> </a></li>
                                               <?php
                                                
                                                                          
                                            }
                                        }
                                    ?>
                                        
                                            <li><a href="doc-content-image.html">Image</a></li>
                                            <li><a href="doc-element-tab.html">Tables</a></li>
                                            
                                        </ul>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="doc-ref-cheatsheet.html" class="nav-link"><img src="img/side-nav/chat1.png" alt="">Reference</a>
                                        <span class="icon"><i class="arrow_carrot-down"></i></span>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li><a href="doc-ref-cheatsheet.html">Cheatsheet</a></li>
                                            <li><a href="doc-ref-footnote.html">Footnotes</a></li>
                                            <li><a href="doc-tour.html">Interface Tour</a></li>
                                            <li><a href="doc-ref-can-use.html">Can I Use</a></li>
                                            <li><a href="doc-content-tooltip.html">Tooltips & Direction</a></li>
                                            <li><a href="doc-ref-shortcuts.html">Keyboard Shortcuts</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="doc-content-video.html" class="nav-link"><img src="img/side-nav/layout.png" alt="">Layouts</a>
                                        <span class="icon"><i class="arrow_carrot-down"></i></span>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li><a href="doc-content-video.html">Full-width</a></li>
                                            <li><a href="doc-element-hotspots.html">Left Sidebar</a></li>
                                            <li><a href="doc-layout-banner-gradient.html">Gradient Banner</a></li>
                                            <li><a href="doc-layout-banner-empty.html">Without Banner</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="doc-changelog.html" class="nav-link"><img src="img/side-nav/clock.png" alt="">Change Log</a>
                                    </li> -->
                                </ul>
                                <ul class="list-unstyled nav-sidebar coding_nav">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><img src="img/side-nav/account.png" alt="">Account</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="doc-element-code.html" class="nav-link"><img src="img/side-nav/coding.png" alt="">Development</a>
                                    </li> -->
                                </ul>
                                <ul class="list-unstyled nav-sidebar bottom_nav">
                                    <!-- <li class="nav-item">
                                        <a href="#" class="nav-link"><img src="img/side-nav/united-states.png" alt="">United States</a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a href="#" class="nav-link"><img src="img/side-nav/edit.png" alt="">English </a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><img src="img/side-nav/users.png" alt="">Sign In <i class="arrow_right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-7 col-md-8 doc-middle-content">
                        <div id="post" class="shortcode_info">
                            <div class="shortcode_title">
                                <a class="btn" href="#">Elements</a>
                                <h1>Tabs Widget</h1>
                                <p>Welcome to Docy ! Get familiar with the Docy products and explore their features, guides, tips and tools.</p>
                            </div>

                            <div class="tab_shortcode">
                                <div class="shortcode_title">
                                    <h4>Horizontal Tab</h4>
                                </div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Conclusions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Forum</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Reporting</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        Don't get shirty with me what a plonker on your bike mate bugger all mate chip shop bits and bobs smashing mush bugger cup of char, in my flat.
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        Don't get shirty with me what a plonker on your bike mate bugger all mate chip shop bits and bobs smashing mush bugger cup of char, in my flat.
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        Don't get shirty with me what a plonker on your bike mate bugger all mate chip shop bits and bobs smashing mush bugger cup of char, in my flat.
                                    </div>
                                </div>
                            </div>

                            <div class="shortcode_title">
                                <h4>Process Tab</h4>
                                <p class="just_ch_color">Try the Docy API in seconds. Create your first customer,
                                    charge, and more by
                                    following the step below.</p>
                            </div>
                            <div class="process_tab_shortcode">
                                <ul class="nav nav-tabs v_menu" id="myTabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="card-tab" data-toggle="tab" href="#card"
                                            role="tab" aria-controls="card" aria-selected="true"><span>1</span>Card</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer"
                                            role="tab" aria-controls="customer"
                                            aria-selected="false"><span>2</span>Customer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="charge-tab" data-toggle="tab" href="#charge" role="tab"
                                            aria-controls="charge" aria-selected="false"><span>3</span>Charge</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sub-tab" data-toggle="tab" href="#sub" role="tab"
                                            aria-controls="sub" aria-selected="false"><span>4</span>Subscription</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="success-tab" data-toggle="tab" href="#success"
                                            role="tab" aria-controls="success"
                                            aria-selected="false"><span>5</span>Success!</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContents">
                                    <div class="tab-pane fade show active" id="card" role="tabpanel"
                                        aria-labelledby="card-tab">
                                        <p class="ft_change">Twit brilliant he legged it he nicked it amongst hotpot
                                            chinwag spend a penny
                                            lemon squeezy he lost his bottle porkies, Why it's your round happy days.
                                        </p>
                                        <div class="version">
                                            <div class="v_head">
                                                Docy run hello-world
                                            </div>
                                            <div class="v_middle">
                                                <p>Unable to find image <span class="red">'hello-world:latest'</span>
                                                    locally</p>
                                                <p>latest: Pulling from library/hello-world</p>
                                                <p>ca4f61b1923c: Pull <span class="green">complete</span></p>
                                                <p>Digest:
                                                    sha256:ca0eeb6fb05351dfc8759c20733c91def84cb8007aa89a5bf606bc8b315b9fc7
                                                </p>
                                                <p>Status: Downloaded newer image for hello-world:latest</p>
                                            </div>
                                            <div class="v_footer">
                                                <p>Hello from Docy!<br> This message shows that your installation
                                                    appears to be working correctly. <br>...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="customer" role="tabpanel"
                                        aria-labelledby="customer-tab">
                                        <p class="ft_change">Tristique omnis? Hymenaeos montes facilisi magnam facilisi
                                            ante voluptates
                                            odio nulla exercitationem tincidunt maecenas, dolores mauris praesent
                                            placeat</p>
                                        <div class="version">
                                            <p>Vivamus vero netus tristique venenatis excepteur nisl diamlorem nobis
                                                dolorem consequatur repellendus voluptatibus sit voluptas similique
                                                taciti pariatur, veniam, consequatur.</p>
                                            <p>Maecenas tempore facilis temporibus quas! Eius illo optio, rhoncus
                                                expedita doloremque gravida, aptent, pariatur porro</p>
                                            <p>Tristique omnis? Hymenaeos montes facilisi magnam facilisi ante
                                                voluptates odio nulla exercitationem tincidunt maecenas, dolores mauris
                                                praesent placeat</p>
                                        </div>
                                        <p><span>Usage:</span> Click "Submit" to create a token.</p>
                                    </div>
                                    <div class="tab-pane fade" id="charge" role="tabpanel" aria-labelledby="charge-tab">
                                        <p class="ft_change">Twit brilliant he legged it he nicked it amongst hotpot
                                            chinwag spend a penny
                                            lemon squeezy he lost his bottle porkies, Why it's your round happy days.
                                        </p>
                                        <div class="version">
                                            <div class="v_head">
                                                Docy run hello-world
                                            </div>
                                            <div class="v_middle">
                                                <p>Unable to find image <span class="red">'hello-world:latest'</span>
                                                    locally</p>
                                                <p>latest: Pulling from library/hello-world</p>
                                                <p>ca4f61b1923c: Pull <span class="green">complete</span></p>
                                                <p>Digest:
                                                    sha256:ca0eeb6fb05351dfc8759c20733c91def84cb8007aa89a5bf606bc8b315b9fc7
                                                </p>
                                                <p>Status: Downloaded newer image for hello-world:latest</p>
                                            </div>
                                            <div class="v_footer">
                                                <p>Hello from Docy!<br> This message shows that your installation
                                                    appears to be working correctly. <br>...</p>
                                            </div>
                                        </div>
                                        <p><span>Usage:</span> Click "Submit" to create a token.</p>
                                    </div>
                                    <div class="tab-pane fade" id="sub" role="tabpanel" aria-labelledby="sub-tab">
                                        <p class="ft_change">Twit brilliant he legged it he nicked it amongst hotpot
                                            chinwag spend a penny
                                            lemon squeezy he lost his bottle porkies, Why it's your round happy days.
                                        </p>
                                        <div class="version">
                                            <div class="v_head">
                                                Docy run hello-world
                                            </div>
                                            <div class="v_middle">
                                                <p>Unable to find image <span class="red">'hello-world:latest'</span>
                                                    locally</p>
                                                <p>latest: Pulling from library/hello-world</p>
                                                <p>ca4f61b1923c: Pull <span class="green">complete</span></p>
                                                <p>Digest:
                                                    sha256:ca0eeb6fb05351dfc8759c20733c91def84cb8007aa89a5bf606bc8b315b9fc7
                                                </p>
                                                <p>Status: Downloaded newer image for hello-world:latest</p>
                                            </div>
                                            <div class="v_footer">
                                                <p>Hello from Docy!<br> This message shows that your installation
                                                    appears to be working correctly. <br>...</p>
                                            </div>
                                        </div>
                                        <p><span>Usage:</span> Click "Submit" to create a token.</p>
                                    </div>
                                    <div class="tab-pane fade" id="success" role="tabpanel"
                                        aria-labelledby="success-tab">
                                        <p class="ft_change">Twit brilliant he legged it he nicked it amongst hotpot
                                            chinwag spend a penny
                                            lemon squeezy he lost his bottle porkies, Why it's your round happy days.
                                        </p>
                                        <div class="version">
                                            <div class="v_head">
                                                Docy run hello-world
                                            </div>
                                            <div class="v_middle">
                                                <p>Unable to find image <span class="red">'hello-world:latest'</span>
                                                    locally</p>
                                                <p>latest: Pulling from library/hello-world</p>
                                                <p>ca4f61b1923c: Pull <span class="green">complete</span></p>
                                                <p>Digest:
                                                    sha256:ca0eeb6fb05351dfc8759c20733c91def84cb8007aa89a5bf606bc8b315b9fc7
                                                </p>
                                                <p>Status: Downloaded newer image for hello-world:latest</p>
                                            </div>
                                            <div class="v_footer">
                                                <p>Hello from Docy!<br> This message shows that your installation
                                                    appears to be working correctly. <br>...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-info btn-lg previous"><i
                                            class="arrow_carrot-left"></i></button>
                                    <button class="btn btn-info btn-lg next"><i class="arrow_carrot-right"></i></button>
                                </div>
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
                                                <img class="img_rounded" src="img/blog-single/comment_02.jpg"
                                                     alt="">
                                                <div class="media-body">
                                                    <div class="comment_info">
                                                        <h3>Hans Down</h3>
                                                        <div class="comment_date">44 mins ago</div>
                                                    </div>
                                                    <p>Thenks Demo User for Wouldn’t it be better practice to use
                                                        get_the_title.</p>
                                                    <a href="#" class="comment_reply">Reply <i
                                                            class="arrow_right"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media comment_author">
                                                <img class="img_rounded" src="img/blog-single/comment_03.jpg"
                                                     alt="">
                                                <div class="media-body">
                                                    <div class="comment_info">
                                                        <h3>Hans Down</h3>
                                                        <div class="comment_date">44 mins ago</div>
                                                    </div>
                                                    <p>Dropped a clanger up the kyver easy peasy vagabond victoria
                                                        sponge Charles tinkety tonk old fruit argy.!</p>
                                                    <a href="#" class="comment_reply">Reply <i
                                                            class="arrow_right"></i></a>
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
                                <div class="col-md-12 form-group"><button class="btn action_btn thm_btn"
                                                                          type="submit">Post
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
