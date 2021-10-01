<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/admin/assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/css/pace.css')}}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/assets/vendors/material-icons/material-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/assets/vendors/mono-social-icons/monosocialiconsfont.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/assets/vendors/feather-icons/feather.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="{{asset('assets/admin/assets/js/modernizr.min.js')}}"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="{{asset('assets/admin/assets/js/pace.min.js')}}"></script>
</head>

<body class="sidebar-dark sidebar-expand navbar-brand-dark content-dark right-sidebar-dark">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <div class="container-fluid px-0 align-items-stretch">
                <!-- Logo Area -->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img class="logo-expand" alt="" src="{{asset('assets/admin/assets/img/logo-dark.png')}}">
                        <img class="logo-collapse" alt="" src="{{asset('assets/admin/assets/img/logo-collapse.png')}}">
                        <!-- <p>BonVue</p> -->
                    </a>
                </div>
                <!-- /.navbar-header -->
                <!-- Left Menu & Sidebar Toggle -->
                <ul class="nav navbar-nav">
                    <li class="sidebar-toggle dropdown"><a href="javascript:void(0)" class="ripple"><i class="feather feather-menu list-icon fs-20"></i></a>
                    </li>
                </ul>
                <!-- /.navbar-left -->
                <div class="spacer"></div>
        </div>
    <!-- /.container-fluid -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
            <!-- User Details -->
            <div class="side-user">
                <figure class="side-user-bg" style="background-image: url(assets/demo/user-image-cropped.jpg)">
                    <img src="assets/demo/user-image-cropped.jpg" alt="" class="d-none">
                </figure>
                <div class="col-sm-12 text-center p-0 clearfix">
                    <div class="d-inline-block pos-relative mr-b-10"><span class="avatar-text">{{mb_substr($user_info->word, 0, 2)}}</span>
                        <figure class="avatar-img thumb-sm mr-b-0 d-none">
                            <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                        </figure>
                    </div>
                    <!-- /.d-inline-block -->
                    <div class="lh-14 mr-t-5 sidebar-collapse-hidden">
                        <h6 class="hide-menu side-user-heading">{{$user_info->full_name}}</h6><small class="hide-menu">{{$user_info->login}}</small>
                    </div>
                </div>
                <!-- /.col-sm-12 -->
            </div>
            <!-- /.side-user -->
            <!-- Sidebar Menu -->
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="menu-item-has-children active"><a href="index.html"><i class="list-icon material-icons">home</i> <span class="hide-menu">Страницы</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/index.html">Главная</a></li>
                        </ul>
                    </li>
                    <!--<li class="menu-item-has-children "><a href="javascript:void(0);"><i class="list-icon material-icons">apps</i> <span class="hide-menu">Apps <span class="badge bg-primary">6</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/app-calender.html">Calender</a>
                            </li>
                            <li><a href="../default/app-chat.html">Chat</a>
                            </li>
                            <li><a href="../default/app-inbox.html">Inbox</a>
                            </li>
                            <li><a href="../default/app-contacts.html">Contacts</a>
                            </li>
                            <li><a href="../default/app-products.html">Products</a>
                            </li>
                            <li><a href="../default/app-blog.html">Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon material-icons">grid_on</i> <span class="hide-menu">Profile Pages</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/page-profile.html">Profile</a>
                            </li>
                            <li><a href="../default/page-login.html">Login Page</a>
                            </li>
                            <li><a href="../default/page-login2.html">Login Page 2</a>
                            </li>
                            <li><a href="../default/page-register.html">Sign Up</a>
                            </li>
                            <li><a href="../default/page-register2.html">Sign Up 2</a>
                            </li>
                            <li><a href="../default/page-register-3-step.html">3 Step Sign Up</a>
                            </li>
                            <li><a href="../default/page-forgot-pwd.html">Forgot Password</a>
                            </li>
                            <li><a href="../default/page-email-confirm.html">Confirm Email</a>
                            </li>
                            <li><a href="../default/page-lock-screen.html">Lock Screen</a>
                            </li>
                            <li><a href="../default/page-timeline.html">Timeline</a>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Error Pages</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="../default/page-error-403.html">Error 403</a>
                                    </li>
                                    <li><a href="../default/page-error-404.html">Error 404</a>
                                    </li>
                                    <li><a href="../default/page-error-500.html">Error 500</a>
                                    </li>
                                    <li><a href="../default/page-error-503.html">Error 503</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon material-icons">lightbulb_outline</i> <span class="hide-menu">Sample Pages</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="page-blank.html">Blank Page</a>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Email Templates</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="../default/email-templates/basic.html">Basic</a>
                                    </li>
                                    <li><a href="../default/email-templates/billing.html">Billing</a>
                                    </li>
                                    <li><a href="../default/email-templates/friend-request.html">Friend Request</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Maps</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="../default/maps-google.html">Google Maps</a>
                                    </li>
                                    <li><a href="../default/maps-vector.html">Vector Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="../default/page-lightbox.html">Lightbox Popup</a>
                            </li>
                            <li><a href="../default/page-sitemap.html">Sitemap</a>
                            </li>
                            <li><a href="../default/page-search-results.html">Search Results</a>
                            </li>
                            <li><a href="../default/page-custom-scroll.html">Custom Scroll</a>
                            </li>
                            <li><a href="../default/page-utility-classes.html">Utility Classes</a>
                            </li>
                            <li><a href="../default/page-animations.html">Animations</a>
                            </li>
                            <li><a href="../default/page-faq.html">FAQ</a>
                            </li>
                            <li><a href="../default/page-pricing-table.html">Pricing</a>
                            </li>
                            <li><a href="../default/page-invoice.html">Invoice</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-feather"></i> <span class="hide-menu">UI Elements <span class="badge bg-info">7</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/ui-typography.html">Typography</a>
                            </li>
                            <li><a href="../default/ui-buttons.html">Buttons</a>
                            </li>
                            <li><a href="../default/ui-cards.html">Cards</a>
                            </li>
                            <li><a href="../default/ui-tabs.html">Tabs</a>
                            </li>
                            <li><a href="../default/ui-accordions.html">Accordions</a>
                            </li>
                            <li><a href="../default/ui-modals.html">Modals</a>
                            </li>
                            <li><a href="../default/ui-icon-boxes.html">Icon Boxes</a>
                            </li>
                            <li><a href="../default/ui-lists.html">Lists &amp; Media Object</a>
                            </li>
                            <li><a href="../default/ui-grid.html">Grid</a>
                            </li>
                            <li><a href="../default/ui-progress.html">Progress Bars</a>
                            </li>
                            <li><a href="../default/ui-notifications.html">Notifications &amp; Alerts</a>
                            </li>
                            <li><a href="../default/ui-pagination.html">Pagination</a>
                            </li>
                            <li><a href="../default/ui-media.html">Media</a>
                            </li>
                            <li><a href="../default/ui-carousel.html">Carousel</a>
                            </li>
                            <li><a href="../default/ui-bootstrap.html">Bootstrap Elements</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-layout"></i> <span class="hide-menu">Forms</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/form-elements.html">Elements</a>
                            </li>
                            <li><a href="../default/form-material.html">Material Design</a>
                            </li>
                            <li><a href="../default/form-validation.html">Form Validation</a>
                            </li>
                            <li><a href="../default/form-dropzone.html">File Upload</a>
                            </li>
                            <li><a href="../default/form-pickers.html">Picker</a>
                            </li>
                            <li><a href="../default/form-select.html">Select and Multiselect</a>
                            </li>
                            <li><a href="../default/form-tags-categories.html">Tags and Categories</a>
                            </li>
                            <li><a href="../default/form-addons.html">Addons</a>
                            </li>
                            <li><a href="../default/form-editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-clipboard"></i> <span class="hide-menu">Tables</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/tables-basic.html">Basic Tables</a>
                            </li>
                            <li><a href="../default/tables-data-table.html">Data Table</a>
                            </li>
                            <li><a href="../default/tables-bootstrap.html">Bootstrap Tables</a>
                            </li>
                            <li><a href="../default/tables-responsive.html">Responsive Tables</a>
                            </li>
                            <li><a href="../default/tables-editable.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-pie-chart"></i> <span class="hide-menu">Charts</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/charts-flot.html">Flot Charts</a>
                            </li>
                            <li><a href="../default/charts-morris.html">Morris Charts</a>
                            </li>
                            <li><a href="../default/charts-js.html">Chart-js</a>
                            </li>
                            <li><a href="../default/charts-sparkline.html">Sparkline Charts</a>
                            </li>
                            <li><a href="../default/charts-knob.html">Knob Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-heart"></i> <span class="hide-menu">Icons</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/icons-material-design.html">Material Design</a>
                            </li>
                            <li><a href="../default/icons-font-awesome.html">Font Awesome</a>
                            </li>
                            <li><a href="../default/icons-mono-social.html">Social Icons</a>
                            </li>
                            <li><a href="../default/icons-weather.html">Weather Icons</a>
                            </li>
                            <li><a href="../default/icons-linea.html">Linea Icons</a>
                            </li>
                            <li><a href="../default/icons-feather.html">Feather Icons</a>
                            </li>
                        </ul>
                    </li>
                </ul>-->
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>
        <!-- /.site-sidebar -->
        @include('admin/page/' . $page)
        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->
        <aside class="right-sidebar scrollbar-enabled suppress-x">
            <div class="sidebar-chat" data-plugin="chat-sidebar">
                <div class="sidebar-chat-info">
                    <h6 class="fs-16">Chat List</h6>
                    <form class="mr-t-10">
                        <div class="form-group">
                            <input type="search" class="form-control form-control-rounded fs-13 heading-font-family pd-r-30" placeholder="Search for friends ..."> <i class="feather feather-search post-absolute pos-right vertical-center mr-3 text-muted"></i>
                        </div>
                    </form>
                </div>
                <div class="chat-list">
                    <div class="list-group row">
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Julein Renvoye">
                            <figure class="thumb-xs user--online mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Gene Newman</span>  <span class="username">@gene_newman</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Eddie Lebanovkiy">
                            <figure class="thumb-xs user--online mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Billy Black</span>  <span class="username">@billyblack</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Cameron Moll">
                            <figure class="thumb-xs user--online mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user5.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Herbert Diaz</span>  <span class="username">@herbert</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Bill S Kenny">
                            <figure class="user--busy thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user4.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Sylvia Harvey</span>  <span class="username">@sylvia</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Trent Walton">
                            <figure class="user--busy thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user6.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Marsha Hoffman</span>  <span class="username">@m_hoffman</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Julien Renvoye">
                            <figure class="user--offline thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user7.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Mason Grant</span>  <span class="username">@masongrant</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Eddie Lebaovskiy">
                            <figure class="user--offline thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user8.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Shelly Sullivan</span>  <span class="username">@shelly</span></span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.chat-list -->
            </div>
            <!-- /.sidebar-chat -->
        </aside>
        <!-- CHAT PANEL -->
        <div class="chat-panel" hidden>
            <div class="card">
                <div class="card-header d-flex justify-content-between"><a href="javascript:void(0);"><i class="feather feather-message-square text-success"></i></a>  <span class="user-name heading-font-family fw-400">John Doe</span> 
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="widget-chat-activity flex-1">
                        <div class="messages scrollbar-enabled suppress-x">
                            <div class="message media reply">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Epic Cheeseburgers come in all kind of styles.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Cheeseburgers make your knees weak.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media reply">
                                <figure class="thumb-xs2 user--offline">
                                    <a href="#">
                                        <img src="assets/demo/users/user5.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Cheeseburgers will never let you down.</p>
                                    <p>They'll also never run around or desert you.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>A great cheeseburger is a gastronomical event.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media reply">
                                <figure class="thumb-xs2 user--busy">
                                    <a href="#">
                                        <img src="assets/demo/users/user6.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>If you are a vegan, we are sorry for you loss.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.messages -->
                    </div>
                    <!-- /.widget-chat-acitvity -->
                </div>
                <!-- /.card-body -->
                <form action="javascript:void(0)" class="card-footer" method="post">
                    <div class="d-flex justify-content-end"><i class="feather feather-plus-circle list-icon my-1 mr-3"></i>
                        <textarea class="border-0 flex-1" rows="1" style="resize: none" placeholder="Type your message here"></textarea>
                        <button class="btn btn-sm btn-circle bg-transparent" type="submit"><i class="feather feather-arrow-right list-icon fs-26 text-success"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <footer class="footer bg-primary text-inverse text-center">
        <div class="container-fluid"><span class="fs-13 heading-font-family">Copyright @ 2017. All rights reserved <a class="fw-800" href="https://kinetic.dharansh.in">WiseOwl Admin</a> by <a class="fw-800" href="https://themeforest.net/user/unifato">Unifato</a></span>
        </div>
        <!-- /.container-fluid -->
    </footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.9/metisMenu.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>
    <script src="{{asset('assets/admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.2/countUp.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.usa.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('assets/admin/assets/js/template.js')}}"></script>
    <script src="{{asset('assets/admin/assets/js/custom.js')}}"></script>
</body>

</html>