<?php
include 'config/connection.php';

$sql = "SELECT * FROM project";
$res = mysqli_query($con,$sql);
$count = mysqli_num_rows($res);

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
    <link rel="stylesheet" href="assets/font-size/css/rvfs.css" />
    <!-- <link rel="stylesheet" href="assets/fontawesome-5/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="assets\fontawesome-5\css\all.min.css" />

    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>


    <title>KBS</title>
</head>

<body class="doc wide-container" data-spy="scroll" data-target="#navbar-example3" data-scroll-animation="true"
    data-offset="70">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="img/spinner_logo.png" alt="">
                    <h4><span>Doc</span>y</h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>

    <div class="body_wrapper">
    <nav class="navbar navbar-expand-lg menu_one dark_menu display_none sticky-nav">
            <div class="container custom_container">
                <a class="navbar-brand header_logo" href="index.html">
                    <img class="first_logo sticky_logo main_logo" src="img/logo.png" srcset="img/logo-2x.png 2x"
                        alt="logo">
                    <img class="white_logo" src="img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
                </a>
                <div class="search-input">
                    <ion-icon class="search-icon" name="search-outline"></ion-icon>
                    <input type="text" placeholder="Search..." value="" class="">
                </div>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu ml-auto">
                        <!-- <li class="nav-item dropdown submenu">
                            <a href="index.php" class="nav-link dropdown-toggle">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>

                        </li> -->
                       

                        <?php
                            $sql2 = "SELECT * FROM main_menu";
                            $res2 = mysqli_query($con, $sql2);
                            $count2 = mysqli_num_rows($res2);

                            if ($count2 > 0) {
                                while ($row = mysqli_fetch_assoc($res2)) {
                                    $id = $row['id'];
                                    $title = $row['title'];
                                    $url = $row['url'];
                            ?>
                        <li class="nav-item dropdown submenu">
                            <a href="<?php echo $url ?>.php" class="nav-link dropdown-toggle">
                                <?php echo $title ?>
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    
                                    
                                <?php   
                                $sql2 = "SELECT * FROM project where main_menu_id = $id";
                                $res = mysqli_query($con,$sql2);
                                $count = mysqli_num_rows($res2);
                                
                                    if($count > 0){
                                        while($row= mysqli_fetch_assoc($res)){
                                            $project_id = $row['ID'];
                                            $porject_name = $row['Project_name'];
                                            $url = $row['url'];
                                            ?>
                                <li class="nav-item">
                                    <a href="<?php echo $url?>.php?project_id=<?php echo $project_id ?>" class="nav-link">
                                        <?php echo $porject_name ?>
                                    </a>
                                </li>
                                <?php                                     
                                        }
                                    }
                                ?>
                                
    
                                </ul>
                        </li>
                        
                        <?php
                                }
                            }
                            ?>
                        <!-- <li class="nav-item dropdown submenu">
                            <a href="index.php" class="nav-link dropdown-toggle">Help</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>

                        </li> -->




                        <div class="right-nav">
                          <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                                <label for="something" class="tab-btn tab-btns">
                                    <ion-icon class="light-mode" name="contrast"></ion-icon>
                                </label>
                                <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                                <label for="something" class="tab-btn">
                                    <ion-icon class="dark-mode" name="contrast-outline"></ion-icon>
                                </label>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <!--================Forum Breadcrumb Area =================-->

        <section class="doc_banner_area search-banner-light">
            <div class="container">
                <div class="doc_banner_content">
                    <form action="#" class="header_search_form">
                        <div class="header_search_form_info">
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <i class="icon_search"></i>
                                    <input type='search' id="searchbox" autocomplete="off" name="search"
                                        placeholder="Search for Topics...." />
                                    <div class="header_search_form_panel">
                                        <ul class="list-unstyled">
                                            <li>Help Desk
                                                <ul class="list-unstyled search_item">
                                                    <li><span>Configuration</span><a href="#">How to edit host and
                                                            port?</a></li>
                                                    <li><span>Configuration</span><a href="#">The dev Property</a></li>
                                                </ul>
                                            </li>
                                            <li>Support
                                                <ul class="list-unstyled search_item">
                                                    <li><span>Pages</span><a href="#">The asyncData Method</a></li>
                                                </ul>
                                            </li>
                                            <li>Documentation
                                                <ul class="list-unstyled search_item">
                                                    <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                                    </li>
                                                    <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                                    </li>
                                                    <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header_search_keyword">
                            <span class="header-search-form__keywords-label">Popular Searches:</span>
                            <ul class="list-unstyled">
                                <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#">Docy Documentation</a>,</li>
                                <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Tabs Widget</a>,</li>
                                <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">Process Tab</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Fetch menu items from the database -->

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
                        <!-- <aside class="doc_left_sidebarlist">
                            <div class="open_icon" id="left">
                                <i class="arrow_carrot-right"></i>
                                <i class="arrow_carrot-left"></i>
                            </div>
                            <div class="scroll">
                                <ul class="list-unstyled nav-sidebar">
                                    <li class="nav-item">                                      
                                        <a href="doc-main.html" class="nav-link"><img src="img/side-nav/home.png" alt="">Home</a>
                                    </li>   
                                    <?php    
                                        $sql = "SELECT * FROM module";
                                        $res1 = mysqli_query($con,$sql);
                                        $count1 = mysqli_num_rows($res1);
                                        if($count1 > 0){
                                            while($row= mysqli_fetch_assoc($res1)){
                                                $menu_id = $row['ID'];
                                                $module_name = $row['Module_name'];
                                                ?> 
                                                                      
                                    <li class="nav-item ">                                      
                                        <a href="content_home.php?module=<?php echo $menu_id?>" class="nav-link"><i class="fa fa-solid fa-bars"></i>   <span class="pl-3"> </span><?php echo $module_name ?></a>                                       
                                        <span class="icon"><i class="arrow_carrot-down"></i></span>                                        
                                        <ul class="list-unstyled dropdown_nav">                                       
                                    </li>
                                    
                                    
                                                <?php    
                                                     
                                                    $sql = "SELECT * FROM subject Where Module_id = $menu_id";
                                                    $res2 = mysqli_query($con,$sql);
                                                    $count1 = mysqli_num_rows($res2);
                                                    if($count1 > 0){
                                                        while($row= mysqli_fetch_assoc($res2)){
                                                            $id = $row['ID'];
                                                            $subject_name = $row['Subject_name'];
                                                            ?> 
                                                <li>
                                                
                                                    <a  href="content.php?id=<?php echo $id?>"><?php echo $subject_name ?></a>
                                                    
                                                    

                                                </li>
                                                <?php
                                                            
                                                                                    
                                                        }
                                                    }
                                                ?>
                                         
                                        
                                </ul>
                                <?php
                                                
                                                                          
                                            }
                                        }
                                    ?>
                                        
                            
                                </ul>
                                <ul class="list-unstyled nav-sidebar coding_nav">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><img src="img/side-nav/account.png" alt="">Account</a>
                                    </li>
                                    
                                </ul>
                                <ul class="list-unstyled nav-sidebar bottom_nav">
                                 
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><img src="img/side-nav/users.png" alt="">Sign In <i class="arrow_right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </aside> -->
                    </div>