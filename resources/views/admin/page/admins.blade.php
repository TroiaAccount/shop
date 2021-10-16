<main class="main-wrapper clearfix">
   <!-- Page Title Area -->
   <div class="container-fluid">
      <div class="row page-title clearfix">
         <div class="page-title-left">
               <h6 class="page-title-heading mr-0 mr-r-5">Таблица админов</h6>
               <p class="page-title-description mr-0 d-none d-md-inline-block">новые, история</p>
         </div>
         <!-- /.page-title-left -->
         <div class="page-title-right d-none d-sm-inline-flex">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Страница</a>
                  </li>
                  <li class="breadcrumb-item active">Админы</li>
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
                           <h5>Админы</h5>
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
                                       <th>Роль</th>
                                       <th class="text-center">Действия</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach ($table['admins'] as $result)
                                       <tr>
                                          <td>{{ $result->id }}</td>
                                          <td name="phone" data-redact>{{ $result->login }}</td>
                                          <td name="full_name" data-redact>{{ $result->full_name }}</td>
                                          <td name="role" data-redact>{{ $table['roles'][$result->role] }}</td>
                                          <th class="d-flex justify-content-center">
                                             <p class="ml-3"><i class="fas fa-trash-alt hovered-link red"
                                                data-toggle="tooltip" data-placement="bottom" title="Удалить"
                                                onclick="deleteRow({{ $result->id }}, '{{ Route('delete_admins_DeleteAdmin') }}')"></i></p>
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

   <div class="modal modal-info fade bs-modal-md-info" tabindex="-1" role="dialog"
      aria-labelledby="myMediumModalLabel2" aria-hidden="true" style="display: none">
      <div class="modal-dialog modal-md">
         <div class="modal-content">
               <div class="modal-header text-inverse">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h5 class="modal-title" id="myMediumModalLabel2">Создание админа</h5>
               </div>
               <div class="modal-body">
                  <div class="d-flex flex-column modal-content-wrapper">
                     <p>Пользователь:
                        <select name="user" id="user_id">
                           @foreach ($table['users'] as $result)
                              <option value="{{$result->id}}">{{$result->login}}({{$result->fullname}})</option>
                           @endforeach
                        </select>
                     </p>
                  </div>
                  <div class="d-flex flex-column modal-content-wrapper">
                     <p>Роль:
                        <select name="role" id="role_id">
                           @foreach ($table['roles'] as $key => $result)
                              <option value="{{$key}}">{{$result}}</option>
                           @endforeach
                        </select>
                     </p>
                  </div>
                  <a onclick="addAdmin()" class="btn btn-block btn-outline-success btn-rounded ripple">Добавить админа</a>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-rounded ripple text-left"
                     data-dismiss="modal">Закрыть</button>
               </div>
         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>

   <script>
      function getModal(){
         const $modal = $('.modal');
         $modal.modal('toggle');
      }

      async function addAdmin() {
         let user = document.getElementById('user_id');
         let role = document.getElementById('role_id');
         const data = {
            user_id: user.value,
            role_id: role.value
         };
         try {
            const res = await fetchUrl('{{ Route("write_admins_AddAdmin") }}', 'POST', {
                  'Content-type': 'application/json'
            }, JSON.stringify(data));
            if (res.status == true) {
               location.reload();
            }
         } catch (e) {
            console.error('Error:', e.message);
         }

      }
   </script>

   <div class="container-fluid">
      <div class="row page-title clearfix justify-content-end">
         <div>
               <a onclick="getModal()" class="btn btn-block btn-outline-success btn-rounded ripple">Добавить админа</a>
         </div>
      </div>
   </div>
</main>
