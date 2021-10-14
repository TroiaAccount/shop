<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="container-fluid">
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h6 class="page-title-heading mr-0 mr-r-5">Таблица пользователей</h6>
                <p class="page-title-description mr-0 d-none d-md-inline-block">новые, история</p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-none d-sm-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Страница</a>
                    </li>
                    <li class="breadcrumb-item active">Пользователи</li>
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
                            <h5>Пользователи</h5>
                    </div>
                    <!-- /.widget-heading -->
                    <div class="widget-body clearfix">
                        <table class="table table-striped" data-toggle="datatables"
                            data-plugin-options='{"searching": false}'>
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Телефон</th>
                                <th>ФИО</th>
                                <th class="text-center">Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($table as $result) --}}
                                <tr>
                                <td>Номер</td>
                                <td name="phone" data-redact>+380680892389</td>
                                <td name="full_name" data-redact>Нибожинский Владимир Владимирович</td>
                                <th class="d-flex justify-content-center">
                                    <p><i class="fas fa-pen hovered-link yellow" data-toggle="tooltip" data-placement="bottom" title="Редактировать"></i></p>
                                    <p class="ml-3"><i class="fas fa-trash-alt hovered-link green" data-toggle="tooltip" data-placement="bottom" title="Удалить"></i></p>
                                </th>
                                </tr>
                                {{-- @endforeach --}}
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
</main>