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
                                 <p class="hovered-link text-inline" onclick="getImages('{{$result->image}}')" data-toggle="modal" data-target=".bs-modal-md-info">Посмотреть
                                 </p>
                              </td>
                              <td data-redact>
                                 <div class="status-select show">
                                    @if ($result->status == 1) Отправлен  @elseif ($result->status == 2) Прибыл @elseif ($result->status == 3) Упаковывается @elseif ($result->status == 4) Обрабатывается @endif
                                 </div>
                                 <select class="m-b-10 form-control hide" data-placeholder="Choose"
                                    data-toggle="select2">
                                    <optgroup label="Статус">
                                       @for($i = 1; $i <= 4; $i++) <option value="{{$i}}" @if($result->status == $i)
                                          selected @endif>
                                          @if ($i == 1) Отправлен  @elseif ($i == 2) Прибыл @elseif ($i == 3) Упаковывается @elseif ($i == 4) Обрабатывается @endif</option>
                                       @endfor
                                    </optgroup>
                              </td>
                              </select>
                              <td name="cost" data-redact>{{$result->cost}}</td>
                              <td name="comission" data-redact>{{$result->commission}}</td>
                              <td name="count" data-redact>{{$result->count}}</td>
                              <td name="size" data-redact>{{$result->size}}</td>
                              <td name="model" data-redact>{{$result->model}}</td>
                              <td name="color" data-redact>{{$result->color}}</td>
                              <td>
                                 <p class="hovered-link text-inline" onclick="getUrls('{{$result->ProductUrl}}')">
                                    Посмотреть</p>
                              </td>
                              <th>
                                 <p class="hovered-link" onclick="done({{$result->id}})">Завершить</p>
                                 <p class="hovered-link" onclick="redact(event, {{$result->id}})">Изменить</p>
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
   <div class="col-md-6 widget-holder">
      <div class="widget-bg">
          <div class="widget-body clearfix">
              <h5 class="box-title">Medium Modal</h5>
              <p>You can do the same with medium sized Modals</p><a href="#" data-toggle="modal" data-target=".bs-modal-md-info"
              class="mr-3 btn btn-outline-info">Info</a>
              <!-- /.modal -->
              <div class="modal modal-info fade bs-modal-md-info" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel2" aria-hidden="true" style="display: none">
                  <div class="modal-dialog modal-md">
                      <div class="modal-content">
                          <div class="modal-header text-inverse">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <h5 class="modal-title" id="myMediumModalLabel2">Medium Modal Heading</h5>
                          </div>
                          <div class="modal-body">
                              <h5>First Sub Heading</h5>
                              <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                  Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                              <hr>
                              <h5>Overflowing text to show scroll behavior</h5>
                              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                  and scrambled it to make a type specimen book.</p>
                              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                              <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                  Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                          </div>
                          <div class="modal-footer"><a href="#" class="btn btn-info btn-rounded ripple text-left">Learn more</a> 
                              <button type="button" class="btn btn-danger btn-rounded ripple text-left" data-dismiss="modal">Close this</button>
                          </div>
                      </div>
                      <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
          </div>
          <!-- /.widget-body -->
      </div>
      <!-- /.widget-bg -->
  </div>
</main>
<script>
   function getImages(images) {
      if (images) {
         console.log(JSON.parse(images));
      }
   }

   function getUrls(urls) {
      if (urls) {
         console.log(JSON.parse(urls));
      }
   }

   async function done(id) {
      const data = { id: id };
      try {
         const res = await fetchUrl('{{Route("CompletedOrder")}}', 'POST', {
            'Content-type': 'application/json'
         }, JSON.stringify(data));
         if (res.status === 200) {
            console.log('Завершен');
         }
      } catch (e) {
         console.error('Error:', e.message);
      }

   }
   async function redact(e, id) {
      const parent = e.target.parentElement.parentElement,
            cells = parent.querySelectorAll('[data-redact]'),
            select = parent.querySelector('select'),
            status = parent.querySelector('.status-select');

      e.target.classList.toggle('redact');
      select.classList.toggle('show');
      select.classList.toggle('hide');
      status.classList.toggle('show');
      status.classList.toggle('hide');

      select.addEventListener('change', (e) => {
         console.log(e.target.value);
         status.textContent = e.target.value;
      })

      for (const cell of cells) {
         if (e.target.classList.contains('redact')) {
            cell.setAttribute('contenteditable', true);
         } else {
            cell.setAttribute('contenteditable', false);
         }
      }
      if (!e.target.classList.contains('redact')) {
         const status = select.value,
               cost = parent.querySelector('[name="cost"]').textContent,
               commission = parent.querySelector('[name="comission"]').textContent,
               count = parent.querySelector('[name="count"]').textContent,
               size = parent.querySelector('[name="size"]').textContent,
               model = parent.querySelector('[name="model"]').textContent,
               color = parent.querySelector('[name="color"]').textContent;

         try {
            const res = await fetchUrl('{{Route("ReplaceOrder")}}', 'POST', {
               'Content-type': 'application/json'
            }, JSON.stringify({id, status, cost, commission, count, size, model, color}));
            if (res.status === 200) {
               console.log('Завершен');
            }
         } catch (e) {
            console.error('Error:', e.message);
         }
      }
   }
</script>