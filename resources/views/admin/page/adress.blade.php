<main class="main-wrapper clearfix">
   <!-- Page Title Area -->
   <div class="container-fluid">
      <div class="row page-title clearfix">
         <div class="page-title-left">
               <h6 class="page-title-heading mr-0 mr-r-5">Таблица адресов</h6>
               <p class="page-title-description mr-0 d-none d-md-inline-block">новые, история</p>
         </div>
         <!-- /.page-title-left -->
         <div class="page-title-right d-none d-sm-inline-flex">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Страница</a>
                  </li>
                  <li class="breadcrumb-item active">Адреса</li>
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
                           <h5>Адреса</h5>
                     </div>
                     <!-- /.widget-heading -->
                     <div class="widget-body clearfix">
                           <table class="table table-striped"
                              data-plugin-options='{"searching": false}'>
                              <thead>
                                 <tr>
                                       <th>Пользователь</th>
                                       <th>ФИО</th>
                                       <th>Телефон</th>
                                       <th>E-mail</th>
                                       <th>Адрес</th>
                                       <th>Паспорт</th>
                                       <th class="text-center">Действия</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach ($table as $result)
                                       @php
                                          $adres = $result['adres'];
                                       @endphp
                                       <tr>
                                          <td name="login">{{ $result['user'] }}</td>
                                          <td name="full_name" data-redact>{{ $adres->full_name }}</td>
                                          <td name="phone" data-redact>{{ $adres->telephone }}</td>
                                          <td name="email" data-redact>{{ $adres->email }}</td>
                                          <td name="adress" data-redact>{{ $adres->adres }}</td>
                                          <td name="passport" data-redact>{{ $adres->passport }}</td>
                                          <th class="d-flex justify-content-center">
                                             <p><i class="fas fa-pen hovered-link yellow" data-toggle="tooltip"
                                                      data-placement="bottom" title="Редактировать"
                                                      onclick="redact(event, {{ $adres->id }})"></i></p>
                                             <p class="ml-3"><i class="fas fa-trash-alt hovered-link red"
                                                data-toggle="tooltip" data-placement="bottom" title="Удалить"
                                                onclick="deleteRow({{ $adres->id }}, {{ Route('delete_adress_DeleteAdres') }})"></i></p>
                                          </th>
                                       </tr>
                                 @endforeach
                              </tbody>
                           </table>
                     </div>
                     <!-- /.widget-ody -->
                  </div>
                  <!-- /.widget-bg -->
               </div>
               <!-- /.widget-holder -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.widget-list -->
   </div>
   <script>
      function redact(e, id) {
         editableToggler(e.target);
         const parent = getParent(e.target);
         if (!e.target.parentElement.classList.contains('redact')) {
            showLoader();
            const fullName = parent.querySelector('[name="full_name"]').textContent,
                  phone = parent.querySelector('[name="phone"]').textContent,
                  email = parent.querySelector('[name="email"]').textContent,
                  adress = parent.querySelector('[name="adress"]').textContent,
                  passport = parent.querySelector('[name="passport"]').textContent;

            const body = {
               id,
               fullName,
               phone,
               email,
               adress,
               passport
            };

            postData('{{Route("write_adress_ReplaceAdres")}}', body)
                  .then((res) => {
                     hideLoader();
                     if (res.status === true) {
                        window.location.reload();
                     }
                  });
         }
      }
   </script>

</main>