<main class="main-wrapper clearfix">
   <!-- Page Title Area -->
   <div class="container-fluid">
      <div class="row page-title clearfix">
         <div class="page-title-left">
               <h6 class="page-title-heading mr-0 mr-r-5">Таблица ролей</h6>
               <p class="page-title-description mr-0 d-none d-md-inline-block">новые, история</p>
         </div>
         <!-- /.page-title-left -->
         <div class="page-title-right d-none d-sm-inline-flex">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Страница</a>
                  </li>
                  <li class="breadcrumb-item active">Роли</li>
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
                           <h5>Роли</h5>
                     </div>
                     <!-- /.widget-heading -->
                     <div class="widget-body clearfix">
                           <table class="table table-striped" data-toggle="datatables"
                              data-plugin-options='{"searching": false}'>
                              <thead>
                                 <tr>
                                       <th>ID</th>
                                       <th>Название Роли</th>
                                       <th class="text-center">Действия</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach ($table as $result)
                                       <tr>
                                          <td>{{ $result->id }}</td>
                                          <td name="role" data-redact>{{ $result->name }}</td>
                                          <th class="d-flex justify-content-center">
                                             <p><i class="fas fa-pen hovered-link yellow" data-toggle="tooltip"
                                                      data-placement="bottom" title="Редактировать"
                                                      onclick="redact(event, {{ $result->id }})"></i></p>
                                             <p class="ml-3"><i class="fas fa-trash-alt hovered-link red"
                                                      data-toggle="tooltip" data-placement="bottom" title="Удалить"
                                                      onclick="deleteRow({{ $result->id }}, '{{ Route('delete_roles_DeleteRole') }}')"></i></p>
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
   <div class="container-fluid">
      <div class="row page-title clearfix justify-content-end">
         <div>
               <a onclick="openModal()" class="btn btn-block btn-outline-success btn-rounded ripple">Добавить роль</a>
         </div>
      </div>
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
                  <div class="d-flex flex-column modal-content-wrapper mb-2">
                     <div class="row justify-content-left p-3">
                        <div class="col-3 p-0">Название роли:</div>
                        <div class="col-9 p-0"><input type="text" id="role_name" class="w-100"></div>
                     </div>
                  </div>
                  <div class="d-flex flex-column modal-content-wrapper mb-3 text-center">
                     <div class="row table-head fw-bold">
                        <div class="col-3 text-left">Страница</div>
                        <div class="col-3">Чтение</div>
                        <div class="col-3">Запись</div>
                        <div class="col-3">Удаление</div>
                     </div>
                     <div class="row orders">
                        <div class="col-3 text-left">Заказы:</div>
                        <div class="col-3"><input type="checkbox"></div>
                        <div class="col-3"><input type="checkbox"></div>
                        <div class="col-3"><input type="checkbox"></div>
                     </div>
                     <div class="row users">
                        <div class="col-3 text-left">Пользователи:</div>
                        <div class="col-3"><input type="checkbox"></div>
                        <div class="col-3"><input type="checkbox"></div>
                        <div class="col-3"><input type="checkbox"></div>
                     </div>
                     <div class="row admins">
                        <div class="col-3 text-left">Админы:</div>
                        <div class="col-3"><input type="checkbox"></div>
                        <div class="col-3"><input type="checkbox"></div>
                        <div class="col-3"><input type="checkbox"></div>
                     </div>
                     <div class="row roles">
                        <div class="col-3 text-left">Роли:</div>
                        <div class="col-3"><input type="checkbox"></div>
                        <div class="col-3"><input type="checkbox"></div>
                        <div class="col-3"><input type="checkbox"></div>
                     </div>
                     <div class="row adress">
                        <div class="col-3 text-left">Адреса:</div>
                        <div class="col-3"><input type="checkbox"></div>
                        <div class="col-3"><input type="checkbox"></div>
                        <div class="col-3"><input type="checkbox"></div>
                     </div>
                     <div class="row delivery">
                        <div class="col-3 text-left">Доставка:</div>
                        <div class="col-3"><input type="checkbox"></div>
                        <div class="col-3"><input type="checkbox"></div>
                        <div class="col-3"><input type="checkbox"></div>
                     </div>
                  </div>
                  <a onclick="createRole()" class="btn btn-block btn-outline-success btn-rounded ripple">Добавить роль</a>
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
      function openModal(){
         const $modal = $('.modal');
         $modal.modal('toggle');
      }

      async function createRole() {
         const name = document.querySelector('#role_name').value,
               orders = document.querySelector('.orders'),
               users = document.querySelector('.users'),
               admins = document.querySelector('.admins'),
               roles = document.querySelector('.roles'),
               delivery = document.querySelector('.delivery'),
               adress = document.querySelector('.adress');

         const getRights = (page) => {
            const inputs = page.querySelectorAll('input'),
                  rightsArray = [],
                  rights = {};

            for (const input of inputs) {
               const right = input.checked ? 1 : 0;
               rightsArray.push(right);
            }

            rights['write'] = rightsArray[0];
            rights['read'] = rightsArray[1];
            rights['delete'] = rightsArray[2];

            return rights;
         };

         const body = {
            name,
            rights: {
               users: getRights(users),
               admins: getRights(admins),
               adress: getRights(adress),
               orders: getRights(orders),
               roles: getRights(roles),
               delivery: getRights(delivery)
            }
         }

         try {
            const res = await fetchUrl('{{ Route('write_roles_CreateRole') }}', 'POST', {
                  'Content-type': 'application/json'
               }, JSON.stringify(body));
            if (res.status === true) {
               console.log('Завершен');
            }
         } catch (e) {
            console.error('Error:', e.message);
         }
      }

      async function redact(e, id) {
         
      }
   </script>
</main>
