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
                           <table class="table table-striped"
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
                                                      onclick="redact({{ $result->id }})"></i></p>
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
               <a onclick="openCreateModal()" class="btn btn-block btn-outline-success btn-rounded ripple hovered-btn dark">Добавить роль</a>
         </div>
      </div>
   </div>
   <div class="modal modal-info fade bs-modal-md-info" tabindex="-1" role="dialog"
      aria-labelledby="roleModalTitle" aria-hidden="true" style="display: none">
      <div class="modal-dialog modal-md">
         <div class="modal-content">
               <div class="modal-header text-inverse">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h5 class="modal-title" id="roleModalTitle">Создание админа</h5>
               </div>
               <div class="modal-body">
                  <div class="d-flex flex-column modal-content-wrapper mb-2">
                     <div class="row justify-content-left p-3">
                        <div class="col-3 p-0">Название роли:</div>
                        <div class="col-9 p-0"><input type="text" id="role_name" class="w-100"></div>
                     </div>
                  </div>
                  <form>
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
                        <div class="row blank">
                           <div class="col-3 text-left">Бланк:</div>
                           <div class="col-3"><input type="checkbox"></div>
                           <div class="col-3"><input type="checkbox"></div>
                           <div class="col-3"><input type="checkbox"></div>
                        </div>
                        <div class="row course">
                           <div class="col-3 text-left">Курс:</div>
                           <div class="col-3"><input type="checkbox"></div>
                           <div class="col-3"><input type="checkbox"></div>
                           <div class="col-3"><input type="checkbox"></div>
                        </div>
                     </div>
                     <a onclick="createRole(null, '{{ Route('write_roles_CreateRole') }}')" id="createBtn" class="btn btn-block btn-outline-success btn-rounded ripple hovered-btn dark">Добавить роль</a>
                     <a onclick="createRole(event, '{{ Route('write_roles_ReplaceRole') }}')" id="redactBtn" class="btn btn-block btn-outline-success btn-rounded ripple hide hovered-btn dark" data-id>Сохранить</a>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-rounded ripple text-left"
                     data-dismiss="modal">Закрыть</button>
               </div>
         </div>
         <!-- /.modal-contet -->
      </div>
      <!-- /.modal-dialog -->
   </div>
   <script>
      function openCreateModal() {
         const $modal = $('.modal');
         $modal.find('form').trigger('reset');
         document.querySelector('#role_name').value = '';

         if (!redactBtn.classList.contains('hide')) {
            redactBtn.classList.add('hide');
            createBtn.classList.remove('hide');
         }
         
         changeTextContent('#roleModalTitle', 'Создание Роли');
         openModal();
      }

      function getRoleValues() {
         const name = document.querySelector('#role_name'),
               orders = document.querySelector('.orders'),
               users = document.querySelector('.users'),
               admins = document.querySelector('.admins'),
               roles = document.querySelector('.roles'),
               delivery = document.querySelector('.delivery'),
               adress = document.querySelector('.adress'),
               blank = document.querySelector('.blank'),
               course = document.querySelector('.course'),
               createBtn = document.querySelector('#createBtn'),
               redactBtn = document.querySelector('#redactBtn');
         
         return { name, orders, users, admins, roles, delivery, adress, blank, course, createBtn, redactBtn };
      }

      function createRole(e, url) {
         showLoader();
         const { name, orders, users, admins, roles, delivery, adress, blank, redactBtn, createBtn } = getRoleValues();

         let id;
         if (e) {
            id = e.target.dataset.id;
         }

         const getRights = (page) => {
            const inputs = page.querySelectorAll('input'),
                  rightsArray = [],
                  rights = {};

            for (const input of inputs) {
               const right = input.checked ? 1 : 0;
               rightsArray.push(right);
            }

            rights['read'] = rightsArray[0];
            rights['write'] = rightsArray[1];
            rights['delete'] = rightsArray[2];

            return rights;
         };

         const body = {
            name: name.value,
            rights: {
               users: getRights(users),
               admins: getRights(admins),
               adress: getRights(adress),
               orders: getRights(orders),
               roles: getRights(roles),
               delivery: getRights(delivery),
               blank: getRights(blank),
               course: getRights(course),
            }
         }

         if (id) {
            body['id'] = id;
         }

         postData(url, body)
               .then((res) => {
                  hideLoader();
                  if (res.status === true) {
                     window.location.reload();
                  }
               });
      }

      function redact(id) {
         showLoader();
         const { name, orders, users, admins, roles, delivery, adress, blank, course, redactBtn, createBtn } = getRoleValues();

         changeTextContent('#roleModalTitle', 'Редактирование Роли');
         openModal()

         if (!createBtn.classList.contains('hide')) {
            createBtn.classList.add('hide');
            redactBtn.classList.remove('hide');
            redactBtn.dataset.id = id;
         }

         postData('{{ Route('read_roles_SelectRole') }}', {id})
               .then((res) => {
                  hideLoader();
                  if (res.status === true) {
                     const data = res.data;
                     name.value = data.name;

                     const setRights = (page, data) => {
                        const inputs = page.querySelectorAll('input');

                        inputs[0].checked = data.read ? 1 : 0;
                        inputs[1].checked = data.write ? 1 : 0;
                        inputs[2].checked = data.delete ? 1 : 0;
                     }

                     setRights(orders, data.right.orders);
                     setRights(users, data.right.users);
                     setRights(admins, data.right.admins);
                     setRights(roles, data.right.roles);
                     setRights(delivery, data.right.delivery);
                     setRights(adress, data.right.adress);
                     setRights(blank, data.right.blank);
                     setRights(course, data.right.course);
                  }
               });
      }
   </script>
</main>
