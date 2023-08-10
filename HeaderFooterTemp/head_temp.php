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

    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>


    <title>Docy</title>
</head>

<body class="doc wide-container" data-spy="scroll" data-target="#navbar-example3" data-scroll-animation="true" data-offset="70">
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
                <img class="first_logo sticky_logo main_logo" src="img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
                <img class="white_logo" src="img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
            </a>
            <div class="search-input">
                <ion-icon class="search-icon" name="search-outline"></ion-icon>
                <input type="text" placeholder="Search..." value="" class="">
            </div>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <li class="nav-item dropdown submenu">
                        <a href="index.html" class="nav-link dropdown-toggle">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="index.html" class="nav-link">Creative Helpdesk</a></li>
                                <li class="nav-item"><a href="index-multi.html" class="nav-link">Multi Helpdesk</a></li>
                                <li class="nav-item"><a href="index-classic.html" class="nav-link">Classic Helpdesk</a></li>
                            </ul>
                    </li>
                    <li class="nav-item dropdown submenu mega_menu tab-demo active">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                        <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-lg-5 tabHeader">
                                        <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <li class="nav-item active">
                                                <a class="nav-link" id="v-pills-doc-tab" data-toggle="pill" href="#v-pills-doc" role="tab" aria-controls="v-pills-doc" aria-selected="true">Doc Topics</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="v-pills-code-tab" data-toggle="pill" href="#v-pills-code" role="tab" aria-controls="v-pills-code" aria-selected="false">Elements</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="v-pills-layout-tab" data-toggle="pill" href="#v-pills-layout" role="tab" aria-controls="v-pills-layout" aria-selected="false">Layouts</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="v-pills-tour-tab" data-toggle="pill" href="#v-pills-tour" role="tab" aria-controls="v-pills-tour" aria-selected="false">Reference</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="v-pills-content-tab" data-toggle="pill" href="#v-pills-content" role="tab" aria-controls="v-pills-content" aria-selected="false">Content</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="v-pills-pages-tab" data-toggle="pill" href="#v-pills-pages" role="tab" aria-controls="v-pills-pages" aria-selected="false">Other Pages</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="tab-content tabContent" id="v-pills-tabContent">
                                            <div class="tab-pane fade active show" id="v-pills-doc" role="tabpanel" aria-labelledby="v-pills-doc-tab">
                                                <div class="d-flex">
                                                    <ul class="list-unstyled tab_list">
                                                        <li> <a class="active" href="doc-main.html"> Doc Topics </a> </li>
                                                        <li> <a href="archive-doc-single.html"> Single Product </a> </li>
                                                        <li> <a href="archive-doc-multi.html"> Multi Product </a> </li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <a href="#">
                                                        <p>More Categories</p>
                                                    </a>
                                                    <a href="doc-main.html">
                                                        <p>All docs</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-code" role="tabpanel" aria-labelledby="v-pills-code-tab">
                                                <div class="d-flex">
                                                    <ul class="list-unstyled tab_list">
                                                        <li><a href="doc-element-tab.html">Tabs</a></li>
                                                        <li><a href="doc-element-accordion.html">Accordion</a></li>
                                                        <li><a href="doc-element-notice.html">Notice</a></li>
                                                        <li><a href="doc-element-tab.html">Tables</a></li>
                                                        <li><a href="doc-element-lightbox.html">Image Lightbox</a></li>
                                                    </ul>
                                                    <ul class="list-unstyled tab_list">
                                                        <li><a href="doc-content-tooltip.html">Tooltip</a></li>
                                                        <li><a href="doc-element-lightbox.html">Lightbox</a></li>
                                                        <li><a href="doc-ref-can-use.html">Can I Use</a></li>
                                                        <li><a href="doc-ref-footnote.html">Footnote</a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <a href="#">
                                                        <p>More Categories</p>
                                                    </a>
                                                    <a href="doc-main.html">
                                                        <p>All docs</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-layout" role="tabpanel" aria-labelledby="v-pills-layout-tab">
                                                <div class="d-flex">
                                                    <ul class="list-unstyled tab_list">
                                                        <li><a href="doc-element-hotspots.html">Left Sidebar</a></li>
                                                        <li><a href="doc-content-video.html">Full-width</a></li>
                                                        <li><a href="doc-layout-banner-gradient.html">Gradient Banner</a></li>
                                                        <li><a href="doc-layout-banner-empty.html">Without Banner</a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <a href="#">
                                                        <p>More Categories</p>
                                                    </a>
                                                    <a href="#">
                                                        <p>All docs</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-tour" role="tabpanel" aria-labelledby="v-pills-tour-tab">
                                                <div class="d-flex">
                                                    <ul class="list-unstyled tab_list w_100">
                                                        <li><a href="doc-ref-cheatsheet.html">Cheatsheet</a></li>
                                                        <li><a href="doc-ref-footnote.html">Footnotes</a></li>
                                                        <li><a href="doc-tour.html">Interface Tour</a></li>
                                                        <li><a href="doc-content-tooltip.html">Tooltips & Direction</a></li>
                                                        <li><a href="doc-ref-shortcuts.html">Keyboard Shortcuts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <a href="#">
                                                        <p>More Categories</p>
                                                    </a>
                                                    <a href="#">
                                                        <p>All docs</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-content" role="tabpanel" aria-labelledby="v-pills-content-tab">
                                                <div class="d-flex">
                                                    <ul class="list-unstyled tab_list">
                                                        <li><a href="typography.html">Typography</a></li>
                                                        <li><a href="doc-element-code.html">Code</a></li>
                                                        <li><a href="doc-content-image.html">Image</a></li>
                                                        <li><a href="doc-content-video.html">Video</a></li>
                                                        <li><a href="doc-ref-shortcuts.html">Keyboard Shortcuts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <a href="#">
                                                        <p>More Categories</p>
                                                    </a>
                                                    <a href="#">
                                                        <p>All docs</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-pages" role="tabpanel" aria-labelledby="v-pills-pages-tab">
                                                <div class="d-flex">
                                                    <ul class="list-unstyled tab_list">
                                                        <li><a href="doc-main.html">Doc Topics</a>
                                                        </li>
                                                        <li><a href="onepage.html">Onepage</a>
                                                        </li>
                                                        <li><a href="doc-ref-cheatsheet.html">Cheatseet</a>
                                                        </li>
                                                        <li><a href="doc-changelog.html">Changelog</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <a href="#">
                                                        <p>More Categories</p>
                                                    </a>
                                                    <a href="doc-main.html">
                                                        <p>All docs</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                                <li class="nav-item"><a href="onepage.html" class="nav-link">Onepage Doc</a></li>
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                            <li class="nav-item"><a href="forums.html" class="nav-link">Forum</a></li>
                            <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                            <li class="nav-item"><a href="404-error.html" class="nav-link">404 Error</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="forums.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Forum
                        </a>
                        <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                           data-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="forums.html" class="nav-link">Forums Root</a></li>
                            <li class="nav-item"><a href="forum-topics.html" class="nav-link">Forum Topics</a></li>
                            <li class="nav-item"><a href="forum-single.html" class="nav-link">Topic Details</a></li>
                            <li class="nav-item"><a href="forum-profile.html" class="nav-link">User Profile</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                        <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                            <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Blog Grid Two</a></li>
                            <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                            <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Details</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="right-nav">
                    <a class="nav_btn tp_btn" href="https://is.gd/nDvqm2" target="_blank">Get Docy</a>
                    <a class="px-2 ml-3" href="#" title="Subscribe to the newsletter">
                        <ion-icon name="mail"></ion-icon>
                    </a>
                    <a class="px-2" href="#" title="RSS feed">
                        <ion-icon name="logo-rss"></ion-icon>
                    </a>
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

