<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="container-fluid">
       <div class="row page-title clearfix">
          <div class="page-title-left">
             <h6 class="page-title-heading mr-0 mr-r-5">Таблица доставок</h6>
             <p class="page-title-description mr-0 d-none d-md-inline-block">новые, история</p>
          </div>
          <!-- /.page-title-left -->
          <div class="page-title-right d-none d-sm-inline-flex">
             <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Страница</a>
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
                      <table class="table table-striped"
                         data-plugin-options='{"searching": false}'>
                         <thead>
                            <tr>
                               <th>Клиент</th>
                               <th>Дата</th>
                               <th>Время добавления</th>
                               <th>Вес (кг)</th>
                               <th>Цена за 1кг (юани)</th>
                               <th>Сумма доставки (юани)</th>
                               <th>Способ доставки (канал доставки)</th>
                               <th>Примечание</th>
                               <th>Работник</th>
                               <th>Статус</th>
                               <th>Действия</th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td>number</td>
                               <td>
                                  <p class="hovered-link text-inline" onclick="getImages('image')">Посмотреть</p>
                               </td>
                               <td name="cost" data-redact>cost</td>
                               <td name="comission" data-redact>commission</td>
                               <td name="count" data-redact>count</td>
                               <td name="size" data-redact>size</td>
                               <td name="model" data-redact>model</td>
                               <td name="color" data-redact>color</td>
                               <td>
                                  <p class="hovered-link text-inline" onclick="getUrls('ProductUrl')">
                                     Посмотреть</p>
                               </td>
                               <th class="d-flex justify-content-start">
                                  <p><i class="fas fa-pen hovered-link yellow" data-toggle="tooltip" data-placement="bottom" title="Редактировать заказ, нажмите еще раз чтобы завершить редактирование" onclick="redact(event, id)"></i></p>
                                  <p class="ml-3"><i class="fas fa-check hovered-link green" data-toggle="tooltip" data-placement="bottom" title="Завершить заказ" onclick="done(id)"></i></p>
                               </th>
                            </tr>
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
    <div class="modal modal-info fade bs-modal-md-info" tabindex="-1" role="dialog"
       aria-labelledby="myMediumModalLabel2" aria-hidden="true" style="display: none">
       <div class="modal-dialog modal-md">
          <div class="modal-content">
             <div class="modal-header text-inverse">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h5 class="modal-title" id="myMediumModalLabel2"></h5>
             </div>
             <div class="modal-body">
                <div class="d-flex flex-column modal-content-wrapper">
                   
                </div>
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
    <!-- /.modal -->
 </main>
 <script>
 
    function checkImage(image) {
       image.parentNode.remove();
    }
 
    function getImages(images) {
       if (images) {
          const $modal = $('.modal'),
                $modalTitle = $('.modal-title'),
                $modalContent = $('.modal-content-wrapper');
 
          $modalContent.empty();
          $modalTitle.text('Фото товара');
 
          for (const img of JSON.parse(images)) {
             if (img) {
                const imageWrapper = document.createElement('div'),
                      image = document.createElement('img');
 
                imageWrapper.classList.add('image-wrapper');
                image.classList.add('w-100');
                image.onerror = () => checkImage(image);
                image.src = img[0];
                imageWrapper.append(image);
                $modalContent.append(imageWrapper);
             }
          }
          $modal.modal('toggle');
       }
    }
 
    function getUrls(urls) {
       if (urls) {
          const $modal = $('.modal'),
                $modalTitle = $('.modal-title'),
                $modalContent = $('.modal-content-wrapper');
 
          $modalContent.empty();
          $modalTitle.text('Ссылки на товары');
 
          const urlsWrapper = document.createElement('div');
          urlsWrapper.classList.add('list-group');
 
          for (const url of JSON.parse(urls)) {
             if (url) {
                const a = document.createElement('a');
                a.classList.add('list-group-item', 'list-group-item-action');
                a.href = url;
                a.textContent = url.length > 45 ? url.slice(0, 45) + '...' : url;
                urlsWrapper.append(a);
             }
          }
 
          $modalContent.append(urlsWrapper);
          $modal.modal('toggle');
       }
    }
 
    async function done(id) {
      showLoader();
      const data = { id: id };
      try {
         const res = await fetchUrl('Route("write_orders_CompletedOrder")', 'POST', {
            'Content-type': 'application/json'
         }, JSON.stringify(data));
         hideLoader();
         if (res.status === 200) {
            console.log('Завершен');
         }
      } catch (e) {
         console.error('Error:', e.message);
      }
    }
    async function redact(e, id) {
      const parent = e.target.parentElement.parentElement.parentElement,
            cells = parent.querySelectorAll('[data-redact]'),
            select = parent.querySelector('select'),
            status = parent.querySelector('.status-select');

      e.target.parentElement.classList.toggle('redact');
      select.classList.toggle('show');
      select.classList.toggle('hide');
      status.classList.toggle('show');
      status.classList.toggle('hide');

      select.addEventListener('change', (e) => {
         switch (e.target.value) {
            case '1':
               status.textContent = 'Отправлен';
               break;
            case '2':
               status.textContent = 'Прибыл';
               break;
            case '3':
               status.textContent = 'Упаковывается';
               break;
            case '4':
               status.textContent = 'Обрабатывается';
               break;
            default:
               break;
         }
      })

      for (const cell of cells) {
         if (e.target.parentElement.classList.contains('redact')) {
            cell.setAttribute('contenteditable', true);
         } else {
            cell.setAttribute('contenteditable', false);
         }
      }
      if (!e.target.parentElement.classList.contains('redact')) {
         showLoader();
         const status = select.value,
               cost = parent.querySelector('[name="cost"]').textContent,
               commission = parent.querySelector('[name="comission"]').textContent,
               count = parent.querySelector('[name="count"]').textContent,
               size = parent.querySelector('[name="size"]').textContent,
               model = parent.querySelector('[name="model"]').textContent,
               color = parent.querySelector('[name="color"]').textContent;

         try {
            const res = await fetchUrl('Route("write_orders_ReplaceOrder")', 'POST', {
               'Content-type': 'application/json'
            }, JSON.stringify({ id, status, cost, commission, count, size, model, color }));
            hideLoader();
            if (res.status === 200) {
               console.log('Завершен');
            }
         } catch (e) {
            console.error('Error:', e.message);
         }
      }
   }
</script>