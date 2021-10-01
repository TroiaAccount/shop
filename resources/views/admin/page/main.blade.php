<main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="container-fluid"> 
                <div class="row page-title clearfix">
                    <div class="page-title-left">
                        <h6 class="page-title-heading mr-0 mr-r-5">Dashboard</h6>
                        <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                    </div>
                    <!-- /.page-title-left -->
                    <div class="page-title-right d-none d-sm-inline-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div>
                    <!-- /.page-title-right -->
                </div>
                <!-- /.page-title -->
            </div>
            <!-- /.container-fluid -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="container-fluid">
                <div class="widget-list row">
                    <div class="widget-holder col-lg-8">
                        <div class="widget-bg">
                            <div class="widget-heading">
                                <h5 class="widget-title">Visitor Count<small>Today</small></h5>
                                <div class="widget-graph-info">
                                    <div class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle text-muted fs-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.widget-graph-info -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body">
                                <div class="row no-gutters mt-2" style="margin-bottom: 20px">
                                    <div class="col-md-5">
                                        <p class="h1 lh-10 m-0 fw-300"><span class="counter">23743</span>
                                        </p><small class="small text-success fs-11">Total Visits</small>
                                    </div>
                                    <!-- /.col-6 -->
                                    <div class="col-md-7 row no-gutters mt-2">
                                        <div class="col-sm-6">
                                            <div class="graph-info"><span class="graph-info-legend bg-success mr-2"></span>
                                                <div class="graph-info-body">
                                                    <h6>Organic Traffic</h6><small><span class="text-success">+ 17%</span> this month</small>
                                                </div>
                                                <!-- /.media-body -->
                                            </div>
                                            <!-- /.graph-info -->
                                        </div>
                                        <!-- /.col-6 -->
                                        <div class="col-sm-6">
                                            <div class="graph-info"><span class="graph-info-legend bg-primary mr-2"></span>
                                                <div class="graph-info-body">
                                                    <h6>Paid Traffic</h6><small><span class="text-danger">- 23%</span> this month</small>
                                                </div>
                                                <!-- /.media-body -->
                                            </div>
                                            <!-- /.graph-info -->
                                        </div>
                                        <!-- /.col-6 -->
                                    </div>
                                    <!-- /.col-6 -->
                                </div>
                                <!-- /.row -->
                                <div style="height: 200px">
                                    <canvas id="chartsJsVisitorsCount" style="width: 100%; height: 200px"></canvas>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder col-lg-4">
                        <div class="widget-bg">
                            <div class="widget-heading">
                                <h5 class="widget-title">Credit Available<small>Today</small></h5>
                                <div class="widget-graph-info">
                                    <div class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle text-muted fs-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.widget-graph-info -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body">
                                <div class="row no-gutters mt-2 mb-3">
                                    <div class="col-sm-6">
                                        <p class="h1 lh-10 m-0 fw-300"><small class="fs-24 mr-1 text-muted">&dollar;</small><span class="counter">13750</span>
                                        </p>
                                    </div>
                                    <!-- /.col-6 -->
                                    <div class="col-sm-6 text-sm-right">
                                        <p class="fs-15 mb-0"><span class="text-success fw-500">74% <i class="material-icons">show_chart</i></span>
                                        </p><small class="fs-11">Milestone Completed</small>
                                    </div>
                                    <!-- /.col-6 -->
                                </div>
                                <!-- /.row -->
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success" style="width: 60%" role="progressbar"><span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                                <div class="row mr-t-50">
                                    <div class="col-md-6">
                                        <div class="pos-relative" style="height: 150px">
                                            <canvas id="chartJsDoughnutLegend"></canvas><span class="h6 fw-600 text-muted fs-13 text-uppercase m-0 absolute-center">Referral</span>
                                        </div>
                                        <!-- /.pos-relative -->
                                    </div>
                                    <!-- /.col-6 -->
                                    <div class="col-md-6 pl-4 pt-sm-0 pt-4">
                                        <p class="fs-11 text-success">Spending Patterns</p>
                                        <h6 class="fs-15 mb-0 fw-500">&dollar; <span class="counter">56780</span></h6><small class="fs-11">Total Amount Spent</small>
                                        <h6 class="fs-15 mb-0 fw-500">&dollar; <span class="counter">12500</span></h6><small class="fs-11">Spend Last Month</small>
                                    </div>
                                    <!-- /.col-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder widget-sm col-lg-3 col-md-6 widget-full-height">
                        <div class="widget-bg bg-primary text-inverse">
                            <div class="widget-body">
                                <div class="counter-w-info media">
                                    <div class="media-body w-50">
                                        <p class="text-muted mr-b-5 fw-600">Total Balance</p><span class="counter-title d-block">$<span class="counter">487</span></span>
                                        <!-- /.counter-title --> <a href="#" class="btn btn-link btn-underlined btn-xs fs-11 btn-yellow text-white">View Statement</a>
                                    </div>
                                    <!-- /.media-body -->
                                    <div class="pull-right align-self-center">
                                        <div class="mr-t-20"><span data-toggle="sparklines" data-height="40" data-width="100" data-type="bar" data-bar-spacing="3" data-bar-width="3" data-zero-axis="false" data-bar-color="rgba(144,186,236,1)" data-color-map="

                        rgba(255,255,255,1.0);

                        rgba(255,255,255,0.4);

                        rgba(255,255,255,1.0);

                        rgba(255,255,255,0.4);

                        rgba(255,255,255,1.0);

                        rgba(255,255,255,0.4);

                        rgba(255,255,255,1.0);

                      " data-chart-range-min="0"><!-- 4,7,8,5,3,6,8 --></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.counter-w-info -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder widget-sm col-lg-3 col-md-6 widget-full-height">
                        <div class="widget-bg text-inverse" style="background: #85d1f1">
                            <div class="widget-body">
                                <div class="counter-w-info media">
                                    <div class="media-body w-50">
                                        <p class="text-muted mr-b-5 fw-600">Credit Available</p><span class="counter-title d-block">$<span class="counter">13750</span></span>
                                        <!-- /.counter-title --> <a href="#" class="btn btn-link btn-underlined btn-xs btn-white fs-11">View History</a>
                                    </div>
                                    <!-- /.media-body -->
                                    <div class="pull-right align-self-center">
                                        <div class="mr-t-20"><span data-toggle="sparklines" data-height="40" data-width="100" data-type="bar" data-bar-spacing="3" data-bar-width="3" data-zero-axis="false" data-bar-color="rgba(144,186,236,1)" data-color-map="

                        rgba(255,255,255,1.0);

                        rgba(255,255,255,0.4);

                        rgba(255,255,255,1.0);

                        rgba(255,255,255,0.4);

                        rgba(255,255,255,1.0);

                        rgba(255,255,255,0.4);

                        rgba(255,255,255,1.0);

                      " data-chart-range-min="0"><!-- 4,7,8,5,3,6,8 --></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.counter-w-info -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder widget-sm col-lg-3 col-md-6 widget-full-height">
                        <div class="widget-bg mb-0">
                            <div class="widget-body pb-0">
                                <div class="counter-w-info media">
                                    <div class="media-body w-50">
                                        <p class="text-muted mr-b-5 fw-600">Daily Visits</p><span class="counter-title d-block"><span class="counter">8275</span><span class="text-success fs-14 ml-2">27 <i class="material-icons fs-16 ml-1">arrow_upward</i></span></span>
                                        <!-- /.counter-title -->
                                        <div style="margin-right: -30px; margin-left: -30px; height: 60px">
                                            <canvas id="chartsJsDailyVisits"></canvas>
                                        </div>
                                    </div>
                                    <!-- /.media-body -->
                                </div>
                                <!-- /.counter-w-info -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder widget-sm col-lg-3 col-md-6 widget-full-height">
                        <div class="widget-bg">
                            <div class="widget-body">
                                <div class="counter-w-info media"><i class="list-icon bg-success material-icons md-18">show_chart</i>
                                    <div class="media-body w-50">
                                        <p class="text-muted mr-b-5 fw-600">Conversion Rate</p><span class="counter-title d-block"><span class="counter">3.67</span>%<span class="text-success fs-14 ml-2">%13 <i class="material-icons fs-16 ml-1">arrow_upward</i></span></span>
                                        <!-- /.counter-title --> <a href="#" class="btn btn-link btn-xs btn-success fs-11">View History</a>
                                    </div>
                                    <!-- /.media-body -->
                                </div>
                                <!-- /.counter-w-info -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder widget-full-height widget-flex col-lg-6">
                        <div class="widget-bg">
                            <div class="widget-heading">
                                <h5 class="widget-title">Latest Posts <small>News</small></h5>
                                <div class="widget-graph-info">
                                    <div class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle text-muted fs-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.widget-graph-info -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body">
                                <div class="widget-latest-posts-2">
                                    <article class="post post-gallery">
                                        <div class="gallery lightbox-gallery row" data-toggle="lightbox-gallery" data-type="image">
                                            <div class="col-6">
                                                <a href="assets/demo/home-post-1.jpg" class="post-img lightbox d-block">
                                                    <img src="assets/demo/home-post-1.jpg" alt="A book is a dream that you hold in your hands">
                                                </a>
                                            </div>
                                            <!-- /.col-6 -->
                                            <div class="col-6">
                                                <a href="assets/demo/home-post-2.jpg" class="post-img lightbox d-block mr-b-20">
                                                    <img src="assets/demo/home-post-2.jpg" alt="A book is a dream that you hold in your hands">
                                                </a>
                                                <a href="assets/demo/home-post-3.jpg" class="post-img lightbox d-block">
                                                    <img src="assets/demo/home-post-3.jpg" alt="A book is a dream that you hold in your hands">
                                                </a>
                                            </div>
                                            <!-- /.col-6 -->
                                        </div>
                                        <!-- /.gallery -->
                                        <div class="post-details">
                                            <h4 class="post-title"><a href="#" class="d-none">5 Amazing places to visit before you die</a></h4>
                                            <p class="headings-font-family">Research shows that there is only half as much variation in student achievement between schools there is among classrooms...</p>
                                            <div class="post-links">
                                                <figure>
                                                    <a href="#">
                                                        <img class="rounded-circle" src="assets/demo/users/user1.jpg" alt="User 1">
                                                    </a>
                                                </figure>
                                                <ul>
                                                    <li><a href="#"><i class="material-icons fs-12 lh-14 align-top">remove_red_eye</i> 684</a>
                                                    </li>
                                                    <li><a href="#"><i class="material-icons fs-12 lh-14 align-top">thumb_up</i> 53</a>
                                                    </li>
                                                    <li><a href="#"><i class="material-icons fs-12 lh-14 align-top">comment</i> 21</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.post-links -->
                                        </div>
                                        <!-- /.post-details -->
                                    </article>
                                </div>
                                <!-- /.widget-latest-posts -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder widget-full-height widget-flex col-lg-6">
                        <div class="widget-bg">
                            <div class="widget-heading">
                                <h5 class="widget-title">To-Do Widget</h5>
                                <div class="widget-actions"><a href="#" class="btn btn-sm px-3 btn-rounded btn-success text-uppercase fw-600 fs-11">View Calendar</a>
                                </div>
                                <!-- /.widget-actions -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body">
                                <div class="widget-todo">
                                    <div class="single media"><i class="single-icon material-icons color-primary">radio_button_unchecked</i>
                                        <div class="media-body">
                                            <div class="text-muted heading-font-family fw-500">09:30 - 10:30</div>
                                            <h6 class="single-title">Make an appointment with Doctor</h6>
                                            <p class="fw-400 fs-13 mb-0 text-muted"><i class="align-bottom material-icons md-18">pin_drop</i> Dr. Schoeb's Spine Center</p>
                                        </div>
                                        <!-- /.media-body -->
                                        <div class="dropdown align-self-center"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Done</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                            <!-- /.dropdown-menu -->
                                        </div>
                                        <!-- /.dropdown -->
                                    </div>
                                    <!-- /.single -->
                                    <div class="single media"><i class="single-icon material-icons color-info">radio_button_unchecked</i>
                                        <div class="media-body">
                                            <div class="text-muted heading-font-family fw-500">16:00 - 20:00</div>
                                            <h6 class="single-title">Visit WordCamp 2017 Ontario</h6>
                                            <p class="fw-400 fs-13 mb-0 text-muted"><i class="align-bottom material-icons md-18">pin_drop</i> Carleton University, Ontario</p>
                                        </div>
                                        <!-- /.media-body -->
                                        <div class="user-avatar-list align-self-center mr-3"><a href="#" class="thumb-xxs more-link">+24</a> 
                                            <a href="#" class="thumb-xxs">
                                                <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="User 2">
                                            </a>
                                            <a href="#" class="thumb-xxs">
                                                <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt="User 3">
                                            </a>
                                            <a href="#" class="thumb-xxs">
                                                <img src="assets/demo/users/user4.jpg" class="rounded-circle" alt="User 4">
                                            </a>
                                            <a href="#" class="thumb-xxs">
                                                <img src="assets/demo/users/user5.jpg" class="rounded-circle" alt="User 5">
                                            </a>
                                        </div>
                                        <!-- /.user-avatar-list -->
                                        <div class="dropdown align-self-center"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Done</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                            <!-- /.dropdown-menu -->
                                        </div>
                                        <!-- /.dropdown -->
                                    </div>
                                    <!-- /.single -->
                                    <div class="single media"><i class="single-icon material-icons color-success">radio_button_unchecked</i>
                                        <div class="media-body">
                                            <div class="text-muted heading-font-family fw-500">16:00 - 20:00</div>
                                            <h6 class="single-title">Skype call to Herbert Diaz</h6>
                                            <ul class="single-tags list-unstyled list-inline">
                                                <li><a href="#">skype</a>
                                                </li>
                                                <li><a href="#">business</a>
                                                </li>
                                                <li><a href="#">call</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.media-body -->
                                        <div class="user-avatar-list align-self-center mr-3">
                                            <a href="#" class="thumb-xxs">
                                                <img src="assets/demo/users/user5.jpg" class="rounded-circle" alt="User 2">
                                            </a>
                                        </div>
                                        <!-- /.user-avatar-list -->
                                        <div class="dropdown align-self-center"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Done</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                            <!-- /.dropdown-menu -->
                                        </div>
                                        <!-- /.dropdown -->
                                    </div>
                                    <!-- /.single -->
                                    <div class="single media done"><i class="single-icon material-icons color-warning">radio_button_checked</i>
                                        <div class="media-body">
                                            <div class="text-muted heading-font-family fw-500">1 day ago</div>
                                            <h6 class="single-title">Visit our boys in Battle Exhibition</h6>
                                            <p class="fw-400 fs-13 mb-0 text-muted"><i class="material-icons md-18">pin_drop</i> St. Mary's Museum, Ontario</p>
                                        </div>
                                        <!-- /.media-body -->
                                        <div class="dropdown align-self-center"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Done</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                            <!-- /.dropdown-menu -->
                                        </div>
                                        <!-- /.dropdown -->
                                    </div>
                                    <!-- /.single --> <a href="#" class="add-btn btn btn-circle btn-md fs-20 btn-primary"><i class="material-icons">add</i></a>
                                </div>
                                <!-- /.widget-todo -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder widget-full-height widget-flex col-lg-8">
                        <div class="widget-bg">
                            <div class="widget-heading">
                                <h5 class="widget-title">Visitors from U.S.A <small>This Month</small></h5>
                                <div class="widget-graph-info">
                                    <div class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle text-muted fs-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.widget-graph-info -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body">
                                <form method="post" action="javascript:void(0);">
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <select class="m-b-10 form-control" data-placeholder="Choose" data-toggle="select2">
                                                <option>Choose Region</option>
                                                <option>Region 1</option>
                                                <option>Region 2</option>
                                                <option>Region 3</option>
                                                <option>Region 4</option>
                                                <option>Region 5</option>
                                            </select>
                                        </div>
                                        <!-- /.col-4 -->
                                        <div class="form-group col-sm-4">
                                            <select class="m-b-10 form-control" data-placeholder="Choose" data-toggle="select2">
                                                <option>Choose Sub Region</option>
                                                <option>Region 1</option>
                                                <option>Region 2</option>
                                                <option>Region 3</option>
                                                <option>Region 4</option>
                                                <option>Region 5</option>
                                            </select>
                                        </div>
                                        <!-- /.col-4 -->
                                        <div class="form-group col-sm-4">
                                            <select class="m-b-10 form-control" data-placeholder="Choose" data-toggle="select2">
                                                <option>Subscribers</option>
                                                <option>Region 1</option>
                                                <option>Region 2</option>
                                                <option>Region 3</option>
                                                <option>Region 4</option>
                                                <option>Region 5</option>
                                            </select>
                                        </div>
                                        <!-- /.col-4 -->
                                        <div style="height: 330px; margin-top: 30px" class="vmap" data-toggle="vector-map" data-plugin-options='{"map":"usa_en", "color": "#DFAF03", "valuesSrcFile": "assets/js/sample-usa-data.json"}'></div>
                                        <!-- /.vmap -->
                                    </div>
                                    <!-- /.row -->
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder col-lg-4">
                        <div class="widget-bg">
                            <div class="widget-heading">
                                <h5 class="widget-title">Top Countries<small>This Month</small></h5>
                                <div class="widget-graph-info">
                                    <div class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle text-muted fs-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.widget-graph-info -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body">
                                <div class="widget-top-countries-views">
                                    <ol>
                                        <li><span class="country-tag bg-primary">US</span>  <span class="country-name">U.S of America</span>  <span class="country-views">9,321 <span class="text-muted">views</span></span>
                                        </li>
                                        <li><span class="country-tag bg-success">DE</span>  <span class="country-name">Germany</span>  <span class="country-views">4,624 <span class="text-muted">views</span></span>
                                        </li>
                                        <li><span class="country-tag bg-danger">EN</span>  <span class="country-name">United Kingdom</span>  <span class="country-views">3,678 <span class="text-muted">views</span></span>
                                        </li>
                                        <li><span class="country-tag bg-mustard">IN</span>  <span class="country-name">India</span>  <span class="country-views">3,592 <span class="text-muted">views</span></span>
                                        </li>
                                        <li><span class="country-tag bg-primary">FR</span>  <span class="country-name">France</span>  <span class="country-views">3,045 <span class="text-muted">views</span></span>
                                        </li>
                                        <li><span class="country-tag bg-success">AU</span>  <span class="country-name">Australia</span>  <span class="country-views">1,582 <span class="text-muted">views</span></span>
                                        </li>
                                    </ol>
                                </div>
                                <!-- /.widget-top-countries-views -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder widget-full-height widget-flex col-lg-6">
                        <div class="widget-bg">
                            <div class="widget-heading">
                                <h5 class="widget-title">Chat Activity</h5>
                                <div class="widget-actions">
                                    <div class="float-right user-avatar-list"><a href="#" class="thumb-xxs more-link">+24</a> 
                                        <a href="#" class="thumb-xxs">
                                            <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="User 2">
                                        </a>
                                        <a href="#" class="thumb-xxs">
                                            <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt="User 3">
                                        </a>
                                        <a href="#" class="thumb-xxs">
                                            <img src="assets/demo/users/user4.jpg" class="rounded-circle" alt="User 4">
                                        </a>
                                        <a href="#" class="thumb-xxs">
                                            <img src="assets/demo/users/user5.jpg" class="rounded-circle" alt="User 5">
                                        </a>
                                    </div>
                                    <!-- /.user-avatar-list -->
                                </div>
                                <!-- /.widget-actions -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body">
                                <div class="widget-chat-activity scrollbar-enabled flex-1">
                                    <div class="messages">
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
                                <!-- /.widget-chat -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder widget-full-height col-lg-6">
                        <div class="widget-bg">
                            <div class="widget-heading">
                                <h5 class="widget-title">Recent Activities <small>Updates</small></h5>
                                <div class="widget-graph-info">
                                    <div class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle text-muted fs-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.widget-graph-info -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body">
                                <div class="widget-user-activities-3">
                                    <div class="single media active"><i class="list-icon material-icons">notifications_none</i>
                                        <div class="media-body">
                                            <p>Gene Newman added to you to <a href="#">AdCart</a> project</p><small>8 minutes ago</small>
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.single -->
                                    <div class="single media active"><i class="list-icon material-icons">notifications_none</i>
                                        <div class="media-body">
                                            <p>You have logged 2 hours in <a href="#">UI/UX Term</a>
                                            </p><small>8 minutes ago</small>
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.single -->
                                    <div class="single media active"><i class="list-icon material-icons">notifications_none</i>
                                        <div class="media-body">
                                            <p>Billy Black accepted your hours on <a href="#">24/8/2018</a>
                                            </p><small>8 minutes ago</small>
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.single -->
                                    <div class="single media inactive"><i class="list-icon material-icons">notifications_none</i>
                                        <div class="media-body">
                                            <p>Herbert Diaz added on you to <a href="#">Reptil.io</a> project</p><small>8 minutes ago</small>
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.single -->
                                    <div class="single media inactive"><i class="list-icon material-icons">notifications_none</i>
                                        <div class="media-body">
                                            <p>You have logged 8 hours in <a href="#">Park.io</a>
                                            </p><small>8 minutes ago</small>
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.single -->
                                    <div class="single media inactive"><i class="list-icon material-icons">notifications_none</i>
                                        <div class="media-body">
                                            <p>Sylvia Harvey added you to <a href="#">Park.io</a>
                                            </p><small>8 minutes ago</small>
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.single -->
                                </div>
                                <!-- /.widget-user-activities-3 -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.widget-list -->
            </div>
            <!-- /.container-fluid -->
        </main>