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
      <!-- <script scr="js/jquery-3.5.1.min.js"></script> -->
      <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"
         integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <script>
         $(document).ready(function () {
             $('#project').on('change', function () {
                 var projectID = $(this).val();
                 if (projectID) {
                     $.ajax({
                         type: 'POST',
                         url: 'ajaxData.php',
                         data: 'project=' + projectID,
                         success: function (html) {
                             $('#module').html(html);
                             // $('#main_menu_display').html(html);
                         }
                     });
                 } else {
                     $('#module').html('<option value="" >Select Module</option>');
                     // $('#main_menu').html('<option value="">Select Main Menu</option>');
                 }
             });
         
         
         });
      </script>
      <script>
         $(document).ready(function () {
             $('#project').on('change', function () {
                 var projectID = $(this).val();
                 if (projectID) {
                     $.ajax({
                         type: 'POST',
                         url: 'ajaxData.php',
                         data: 'project2=' + projectID,
                         success: function (html) {
                             // $('#module').html(html);
                             $('#main_menu_display').html(html);
                         }
                     });
                 }
                 // else {
                 //     $('#module').html('<option value="" >Select Module</option>');
                 //     // $('#main_menu').html('<option value="">Select Main Menu</option>');
                 // }
             });
         
         
         });
      </script>
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
                  <h4><span>Knowledge Base</span></h4>
               </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
         </div>
      </div>
      <div class="body_wrapper">
      <nav class="navbar navbar-expand-lg menu_one dark_menu display_none sticky-nav">
         <div class="container custom_container">
            <a class="navbar-brand header_logo" href="admin_home.php">
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
                  <li class="nav-item dropdown">
                     <a href="admin_home.php" class="nav-link dropdown-toggle">Admin Home</a>
                     <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                        data-toggle="dropdown"></i>
                  </li>
                  <li class="nav-item dropdown submenu">
                     <a href="#" class="nav-link dropdown-toggle">Page</a>
                     <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                        data-toggle="dropdown">
                     </i>
                     <ul class="dropdown-menu">
                        <li class="nav-item submenu">
                           <a href="#" class="nav-link">test</a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle">Help</a>
                     <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                        data-toggle="dropdown">
                     </i>
                  </li>
                  <li class="nav-item dropdown">
                     <a target="_blank" href="index.php" class="nav-link dropdown-toggle">Go To Website</a>
                     <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                        data-toggle="dropdown">
                     </i>
                  </li>
               </ul>
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
            </div>
         </div>
      </nav>
      <!--================Forum Breadcrumb Area =================-->
      <section class="doc_banner_area_admin search-banner-light_admin">
         <div class="container">
            <div class="doc_banner_content">
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
                     <a href="admin_home.php" class="nav-link"><img src="img/side-nav/home.png"
                        alt="">Home</a>
                  </li>
                  <li class="nav-item ">
                     <a href="#" class="nav-link"><i class="fa fa-solid fa-bars"></i> <span
                        class="pl-3"> </span>Add Menu</a>
                     <span class="icon"><i class="arrow_carrot-down"></i></span>
                     <ul class="list-unstyled dropdown_nav">
                        </li>
                        <li>
                           <a href="admin_add_menu.php">Menu</a>
                        </li>
                        <li>
                           <a href="admin_add_tag.php">Tags</a>
                        </li>
                        </li>
                     </ul>
                  <li class="nav-item">
                     <a href="#" class="nav-link"><i class="fa fa-info-circle"></i> <span class="pl-3">
                     </span>Feature Detail</a>
                     <span class="icon"><i class="arrow_carrot-down"></i></span>
                     <ul class="list-unstyled dropdown_nav">
                        </li>
                        <li>
                           <a href="admin_add_feature.php">Add Feature</a>
                        </li>
                        <li>
                           <a href="admin_all_feature.php">All Features</a>
                        </li>
                     </ul>
                  <li class="nav-item">
                     <a href="#" class="nav-link"><i class="fa fa-cogs"></i>
                     <span class="pl-3"> </span>Settup</a>
                     <span class="icon"><i class="arrow_carrot-down"></i></span>
                     <ul class="list-unstyled dropdown_nav">
                        </li>
                        <li>
                           <a href="#">Application Configuration</a>
                        </li>
                        <li>
                           <a href="#">User Management</a>
                        </li>
                     </ul>
               </ul>
               <ul class="list-unstyled nav-sidebar coding_nav">
                  <li class="nav-item">
                     <a href="#" class="nav-link"><img src="img/side-nav/account.png"
                        alt="">Account</a>
                  </li>
               </ul>
               <ul class="list-unstyled nav-sidebar bottom_nav">
                  <li class="nav-item">
                     <a href="#" class="nav-link" class="fa fa-sign-in"><img
                        src="img/side-nav/users.png" alt="">Sign In <i
                        class="arrow_right"></i></a>
                  </li>
               </ul>
            </div>
         </aside>
      </div>
