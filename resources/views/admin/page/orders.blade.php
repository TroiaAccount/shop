<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="container-fluid">
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h6 class="page-title-heading mr-0 mr-r-5">Таблица заказов</h6>
                <p class="page-title-description mr-0 d-none d-md-inline-block">новые, история</p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-none d-sm-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Страница</a>
                    </li>
                    <li class="breadcrumb-item active">Заказы</li>
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
        <div class="widget-list">
            <div class="row">
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg">
                        <div class="widget-heading clearfix">
                            <h5>Заказы</h5>
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body clearfix">
                            <table class="table table-striped" data-toggle="datatables"
                                data-plugin-options='{"searching": false}'>
                                <thead>
                                    <tr>
                                        <th>Номер</th>
                                        <th>Картинки</th>
                                        <th>Статус</th>
                                        <th>Стоимость</th>
                                        <th>Комиссия</th>
                                        <th>Количество</th>
                                        <th>Размер</th>
                                        <th>Модель</th>
                                        <th>Цвет</th>
                                        <th>Ссылки на товары</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($table as $result)
                                    <tr>
                                        <td>{{$result->number}}</td>
                                        <td>
                                            <p class="hovered-link" onclick="getImages('{{$result->image}}')">Посмотреть
                                            </p>
                                        </td>
                                        <td data-redact>{{$result->status}}</td>
                                        <td data-redact>{{$result->cost}}</td>
                                        <td data-redact>{{$result->commission}}</td>
                                        <td data-redact>{{$result->count}}</td>
                                        <td data-redact>{{$result->size}}</td>
                                        <td data-redact>{{$result->model}}</td>
                                        <td data-redact>{{$result->color}}</td>
                                        <td>
                                            <p class="hovered-link" onclick="getImages('{{$result->ProductUrl}}')">
                                                Посмотреть</p>
                                        </td>
                                        <th>
                                            <p class="hovered-link" onclick="done(event)">Завершить</p>
                                            <p class="hovered-link" onclick="redact(event)">Изменить</p>
                                        </th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.widget-list -->
    </div>
    <!-- /.container-fluid -->
    <div class="container-fluid">
        <div class="widget-list">
            <div class="row">
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <h5 class="box-title">Carousel with Styled Items</h5>
                            <div class="carousel multi-slide-carousel" data-slick='{"slidesToShow":2, "slidesToScroll": 2, "autoplay": true, "infinite": true,  "dots": true, "infinite": true }'>
                                <div class="item-image">
                                    <a href="#" class="img-shadow">
                                        <img src="https://ireland.apollo.olxcdn.com/v1/files/rplen24tjjxn1-UA/image;s=500x350" alt=""> <span class="shadow"></span>
                                    </a>
                                    <div class="header-caption d-none d-sm-block"><a href="#" class="bg-success">Sports <span class="triangle-top-left" style="border-color: #38d57a transparent transparent transparent"></span></a>
                                    </div>
                                    <div class="content-caption text-inverse d-none d-sm-block">
                                        <div class="item-date"><i class="feather feather-clock"></i>  <span>Oct 2, 2016</span>
                                        </div>
                                        <h3 class="item-title fw-100 mr-t-10"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <div class="item-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-image">
                                    <a href="#" class="img-shadow">
                                        <img src="https://ireland.apollo.olxcdn.com/v1/files/rplen24tjjxn1-UA/image;s=500x350" alt=""> <span class="shadow"></span>
                                    </a>
                                    <div class="header-caption d-none d-sm-block"><a href="#" class="bg-info">Cricket <span class="triangle-top-left" style="border-color: #03a9f3 transparent transparent transparent"></span></a>
                                    </div>
                                    <div class="content-caption text-inverse d-none d-sm-block">
                                        <div class="item-date"><i class="feather feather-clock"></i>  <span>Oct 2, 2016</span>
                                        </div>
                                        <h3 class="item-title fw-100 mr-t-10"><a href="#">Smack Visitors Over the Head</a></h3>
                                        <div class="item-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-image">
                                    <a href="#" class="img-shadow">
                                        <img src="https://ireland.apollo.olxcdn.com/v1/files/rplen24tjjxn1-UA/image;s=500x350" alt=""> <span class="shadow"></span>
                                    </a>
                                    <div class="header-caption d-none d-sm-block"><a href="#" class="bg-danger">Football <span class="triangle-top-left" style="border-color: #e6614f transparent transparent transparent"></span></a>
                                    </div>
                                    <div class="content-caption text-inverse d-none d-sm-block">
                                        <div class="item-date"><i class="feather feather-clock"></i>  <span>Oct 2, 2016</span>
                                        </div>
                                        <h3 class="item-title fw-100 mr-t-10"><a href="#">Give Them 3 Unbeatable Reasons</a></h3>
                                        <div class="item-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-image">
                                    <a href="#" class="img-shadow">
                                        <img src="https://ireland.apollo.olxcdn.com/v1/files/rplen24tjjxn1-UA/image;s=500x350" alt=""> <span class="shadow"></span>
                                    </a>
                                    <div class="header-caption d-none d-sm-block"><a href="#" class="bg-success">Foods <span class="triangle-top-left" style="border-color: #38d57a transparent transparent transparent"></span></a>
                                    </div>
                                    <div class="content-caption text-inverse d-none d-sm-block">
                                        <div class="item-date"><i class="feather feather-clock"></i>  <span>Oct 2, 2016</span>
                                        </div>
                                        <h3 class="item-title fw-100 mr-t-10"><a href="#">Swapping dull words for sticky</a></h3>
                                        <div class="item-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-image">
                                    <a href="#" class="img-shadow">
                                        <img src="https://ireland.apollo.olxcdn.com/v1/files/rplen24tjjxn1-UA/image;s=500x350" alt=""> <span class="shadow"></span>
                                    </a>
                                    <div class="header-caption d-none d-sm-block"><a href="#" class="bg-info">Medical <span class="triangle-top-left" style="border-color: #03a9f3 transparent transparent transparent"></span></a>
                                    </div>
                                    <div class="content-caption text-inverse d-none d-sm-block">
                                        <div class="item-date"><i class="feather feather-clock"></i>  <span>Oct 2, 2016</span>
                                        </div>
                                        <h3 class="item-title fw-100 mr-t-10"><a href="#">Stealing from PR and bloggers</a></h3>
                                        <div class="item-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-image">
                                    <a href="#" class="img-shadow">
                                        <img src="https://ireland.apollo.olxcdn.com/v1/files/rplen24tjjxn1-UA/image;s=500x350" alt=""> <span class="shadow"></span>
                                    </a>
                                    <div class="header-caption d-none d-sm-block"><a href="#" class="bg-danger">Life <span class="triangle-top-left" style="border-color: #e6614f transparent transparent transparent"></span></a>
                                    </div>
                                    <div class="content-caption text-inverse d-none d-sm-block">
                                        <div class="item-date"><i class="feather feather-clock"></i>  <span>Oct 2, 2016</span>
                                        </div>
                                        <h3 class="item-title fw-100 mr-t-10"><a href="#">Wireless should be free</a></h3>
                                        <div class="item-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.widget-list -->
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    function getImages(images) {
        console.log(JSON.parse(images));
    }

    function getUrls(urls) {
        console.log(JSON.parse(urls));
    }

    function done(e) {
        const cells = e.target.parentElement.parentElement.querySelectorAll('[data-redact]');
        for (const cell of cells) {
            cell.setAttribute('contenteditable', false);
        }
    }

    function redact(e) {
        const cells = e.target.parentElement.parentElement.querySelectorAll('[data-redact]');
        for (const cell of cells) {
            cell.setAttribute('contenteditable', true);
        }
    }
</script>