<?php 

    require_once("config/connection.php");
    $query = " select * from records ";
    $result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-select.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php include('headerfootertemp/head_temp.php') ?>
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
                                <li class="nav-item active">
                                    <a href="doc-main.html" class="nav-link active"><img src="img/side-nav/home.png" alt="">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="doc-main.html" class="nav-link"><img src="img/side-nav/briefcase.png" alt="briefcase">Elements</a>
                                    <span class="icon"><i class="arrow_carrot-down"></i></span>
                                    <ul class="list-unstyled dropdown_nav">
                                        <li><a href="doc-element-tab.html">Tabs</a></li>
                                        <li><a href="doc-element-accordion.html">Accordion</a></li>
                                        <li><a href="doc-element-notice.html">Notices</a></li>
                                        <li><a href="doc-content-tables.html">Table</a></li>
                                        <li><a href="doc-element-lightbox.html">Image Lightbox</a></li>
                                        <li><a href="doc-element-hotspots.html">Image Hotspots</a></li>
                                        <li><a href="doc-element-code.html">Source Code</a></li>
                                        <li><a href="doc-content-tooltip.html">Tooltip</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="typography.html" class="nav-link"><img src="img/side-nav/document.png" alt="">Content</a>
                                    <span class="icon"><i class="arrow_carrot-down"></i></span>
                                    <ul class="list-unstyled dropdown_nav">
                                        <li><a href="doc-content-image.html">Image</a></li>
                                        <li><a href="doc-element-tab.html">Tables</a></li>
                                        <li><a href="doc-element-code.html">Code</a></li>
                                        <li><a href="doc-content-video.html">Video</a></li>
                                        <li><a href="doc-content-tooltip.html">Tooltips & Direction</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
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
                                </li>
                            </ul>
                            <ul class="list-unstyled nav-sidebar coding_nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><img src="img/side-nav/account.png" alt="">Account</a>
                                </li>
                                <li class="nav-item">
                                    <a href="doc-element-code.html" class="nav-link"><img src="img/side-nav/coding.png" alt="">Development</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled nav-sidebar bottom_nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><img src="img/side-nav/united-states.png" alt="">United States</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><img src="img/side-nav/edit.png" alt="">English </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><img src="img/side-nav/users.png" alt="">Sign In <i class="arrow_right"></i></a>
                                </li>
                            </ul>
                         </div>
                        </aside>
                            
                    
                    
                </div>
                <div class="col-lg-9">
                    <article id="post" class="documentation_info">
                        <div class="documentation_body" id="documentation">
                            <div class="shortcode_title">
                            <table class="table table-bordered">
                            <tr>
                                <td> User ID </td>
                                <td> User Name </td>
                                <td> User Email </td>
                                <td> User Age </td>
                                
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['User_ID'];
                                        $UserName = $row['User_Name'];
                                        $UserEmail = $row['User_Email'];
                                        $UserAge = $row['User_Age'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><?php echo $UserAge ?></td>
                                        
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                            </div>
            </div>
        </div>
    </section> 

<?php include('headerfootertemp/footer_temp.php') ?>






<!-- Back to top button -->
<a id="back-to-top" title="Back to Top"></a>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/pre-loader.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/bootstrap/js/bootstrap-select.min.js"></script>
<script src="assets/niceselectpicker/jquery.nice-select.min.js"></script>
<script src="assets/wow/wow.min.js"></script>
<script src="assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/font-size/js/rv-jquery-fontsize-2.0.3.min.js"></script>
<script src="js/anchor.js"></script>
<script src="assets/magnify-pop/jquery.magnific-popup.min.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<body>
    
</body>
</html>