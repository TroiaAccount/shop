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
                            <table class="table table-striped" data-toggle="datatables" data-plugin-options='{"searching": false}'>
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
                                            <td>Посмотреть</td>
                                            <td>{{$result->status}}</td>
                                            <td>{{$result->cost}}</td>
                                            <td>{{$result->commission}}</td>
                                            <td>{{$result->count}}</td>
                                            <td>{{$result->size}}</td>
                                            <td>{{$result->model}}</td>
                                            <td>{{$result->color}}</td>
                                            <td>Посмотреть</td>
                                            <th>Завершить<br>Изменить</th>
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
</main>