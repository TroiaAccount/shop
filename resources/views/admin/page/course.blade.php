<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="container-fluid"> 
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h6 class="page-title-heading mr-0 mr-r-5">Страница</h6>
                <p class="page-title-description mr-0 d-none d-md-inline-block">курс</p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-none d-sm-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Страница</a>
                    </li>
                    <li class="breadcrumb-item active">Курс</li>
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
            <div>
                <p>Курс юань у менеджера<input type="text" name="course" id="course" value="{{$table->cost}}"></p>
                <p>Курс юань у клиента<input type="text" name="user_course" id="user_course" value="{{$table->user_cost}}"></p>
                <button onclick="ChangeCourse()">Сохранить</button>
            </div>
        </div>
        <!-- /.widget-list -->
    </div>
    <!-- /.container-fluid -->
</main>
<script>
    function ChangeCourse() {
      showLoader();
      const course = document.getElementById('course').value;
      const user_course = document.getElementById('user_course').value;
      const body = {cost: course, user_course: user_course};

      postData('{{ Route("write_course_ChangeCourse") }}', body)
         .then((res) => {
            hideLoader();
            if (res.status === true) {
               window.location.reload();
            }
         });
   }
</script>