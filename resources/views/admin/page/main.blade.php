<main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="container-fluid"> 
                <div class="row page-title clearfix">
                    <div class="page-title-left">
                        <h6 class="page-title-heading mr-0 mr-r-5">Страница</h6>
                        <p class="page-title-description mr-0 d-none d-md-inline-block">статистика</p>
                    </div>
                    <!-- /.page-title-left -->
                    <div class="page-title-right d-none d-sm-inline-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Страница</a>
                            </li>
                            <li class="breadcrumb-item active">Главная</li>
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
                    <!-- /.widget-holder -->
                    
                    <!-- /.widget-holder -->
                    <div class="widget-holder widget-sm col-lg-3 col-md-6 widget-full-height">
                        <div class="widget-bg bg-primary text-inverse">
                            <div class="widget-body">
                                <div class="counter-w-info media">
                                    <div class="media-body w-50">
                                        <p class="text-muted mr-b-5 fw-600">Новых заказов</p><span class="counter-title d-block"><span class="counter">{{$table['DeliveryCount']}}</span></span>
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
                                        <p class="text-muted mr-b-5 fw-600">Стоимость заказов</p><span class="counter-title d-block"><span class="counter">{{$table['DeliveryCost']}}</span></span>
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
                                        <p class="text-muted mr-b-5 fw-600">Новых заказов за сегодня</p><span class="counter-title d-block"><span class="counter">{{$table['NewDelivery']}}</span></span>
                                        <!-- /.counter-title -->
                                  
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
                                        <p class="text-muted mr-b-5 fw-600">Процент заказов</p><span class="counter-title d-block"><span class="counter">{{$table['AllOrder']['upper']}} {{$table['AllOrder']['percent']}}</span>%</span>
                                        <!-- /.counter-title --> 
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
                    
                    
                    
                    <!-- /.widget-holder -->
                    
                    <!-- /.widget-holder -->
                    
                    <!-- /.widget-holder -->
                    
                    <!-- /.widget-holder -->
                </div>
                <!-- /.widget-list -->
            </div>
            <!-- /.container-fluid -->
        </main>