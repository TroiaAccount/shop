<div class="d-flex text-input">
   <form id="filter" style="display: flex">
      @csrf
      <div class="card-input d-flex me-3">
         <label for="number" class="col-form-label me-2">Номер:</label>
         <div class="p-0" style="min-width: 80px;">
            <input type="text" id="number" name="number" class="form-control">
         </div>
      </div>
      <div class="card-input d-flex ms-1">
         <label for="number" class="col-form-label me-2">Статус:</label>
         <div class="p-0" style="min-width: 150px;">
            <select class="form-select" aria-label="Выбор статуса" name="status">
               <option value="" selected>Не указано</option>
               <option value="1">Отправлен</option>
               <option value="2">Прибыл</option>
               <option value="3">Упаковывается</option>
               <option value="4">Обрабатывается</option>
            </select>
         </div>
      </div>
      <div class="ms-2">
         <button type="submit" class="btn btn-primary">Поиск</button>
      </div>
   </form>
</div>
<div class="table__wrapper mt-3">
   <table class="table table-bordered">
      <thead>
         <tr>
            <th scope="col">Номер</th>
            <th scope="col">Статус</th>
            <th scope="col">Дата/Время</th>
            <th scope="col">Операции</th>
            <th scope="col">Примечания</th>
         </tr>
      </thead>
      <tbody id="table-body">
         @foreach($table['order'] as $result)
            <tr>
               <td>{{$result->number}}</td>
               <td>@if($result->status == 1) Отправлен @elseif($result->status == 2) Прибыл @elseif($result->status == 3) Упаковывается @elseif($result->status == 4) Обрабатывается @endif</td>
               <td>{{ json_decode($result->json)[0]->lastChange }}</td>
               <td align="right">
                  <a onclick="redactOrder({{ $result->id }})" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Редактировать" class="hovered-link green"><i class="far fa-edit"></i></a>
                  <a onclick="setFavorite(event, {{ $result->id }})" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Добавить в избранные" class="hovered-link red"><i class="@if($result->favorite == 1) fas @else far @endif fa-heart"></i></a>
                  <a onclick="copyOrder({{ $result->id }})" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Копировать" class="hovered-link yellow"><i class="far fa-copy"></i></a>
               </td>
               <td align="center" style="background-color: #eaf5cb;"><i class="fas fa-info-circle"></i></td>
            </tr>
         @endforeach
      </tbody>
   </table>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script>
      $("#filter").on("submit", function(e){
         e.preventDefault();
         renderTable($(this).serialize());
      });

      function renderTable(formdata, page) {
         showLoader();
         const token = document.querySelector('[name="_token"]').value;
         $.ajax({
               url: `{{Route("Filter")}}${page ? `?page=${page}` : ''}`,
               method: 'post',
               dataType: 'json',
               data: `_token=${token}&${formdata}`,
               success: function(res){
                  if(res.status == true){
                     const table = document.querySelector('.table-bordered');
                     table.querySelector('#table-body').remove();
                     const tbody = document.createElement(`tbody`);
                     tbody.setAttribute('id', 'table-body');
                     console.log(res.data);
                     res.data.data.forEach(item => {
                        const tr = document.createElement('tr');
                        let status;
                        if (item.status) {
                           switch (item.status) {
                              case 1: 
                                 status = 'Отправлен';
                                 break;
                              case 2: 
                                 status = 'Прибыл';
                                 break;
                              case 3: 
                                 status = 'Упаковывается';
                                 break;
                              case 4: 
                                 status = 'Обрабатывается';
                                 break;   
                           }
                        } else {
                           status = '';
                        }
                        tr.innerHTML = `
                           <td>${item.number ? item.number : ''}</td>
                           <td>${status}</td>
                           <td>${item.datetime ? item.datetime : ''}</td>
                           <td align="right">
                              <a onclick="redactOrder( ${item.id })" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Редактировать" class="hovered-link green"><i class="far fa-edit"></i></a>
                              <a onclick="setFavorite(event, ${item.id })" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Добавить в избранные" class="hovered-link red"><i class="${item.favorite ? 'fas' : 'far'} fa-heart"></i></a>
                              <a onclick="copyOrder(${item.id })" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Копировать" class="hovered-link yellow"><i class="far fa-copy"></i></a>
                           </td>
                           <td align="center" style="background-color: #eaf5cb;"><i class="fas fa-info-circle"></i></td>
                        `;
                        tbody.append(tr);
                     })
                     table.append(tbody);
                     document.getElementById('pagination').remove();
                     const tableWrapper = document.querySelector('.table__wrapper');
                     const pagination = document.createElement('div');
                     pagination.classList.add('change__page-wrapper', 'w-100');
                     pagination.id = 'pagination';
                     const buttons = [];
                     let startPage = 1;
                     if (res.data.current_page > 5) {
                        startPage = res.data.current_page - 5;
                     }
                     let finalPage = startPage + 10;
                     if (finalPage > res.data.last_page){
                        finalPage = res.data.last_page;
                     }
                     for (let i = startPage; i <= finalPage; i++) {
                        if (res.data.current_page === i) {
                           const div = document.createElement('div');
                           div.innerHTML = `<button id="${res.data.current_page}" name="${res.data.current_page}" class="page-indicator btn btn-outline-secondary change-page-btn" style="border-bottom-right-radius: 0px; border-top-right-radius: 0px;"><i class="fas">${i}</i></button>`;
                           buttons.push(div);
                        } else {
                           const div = document.createElement('div');
                           div.innerHTML = `<button id="${i}" name="${i}" class="btn btn-outline-secondary change-page-btn" style="border-bottom-right-radius: 0px; border-top-right-radius: 0px;"><i class="fas">${i}</i></button>`;
                           buttons.push(div);
                        }
                     }
                     let prevPage, nextPage;
                     if (res.data.current_page === 1) {
                        prevPage = 1;
                     } else {
                        prevPage = res.data.current_page - 1;
                     }
                     if (res.data.current_page === res.data.last_page) {
                        nextPage = 1;
                     } else {
                        nextPage = res.data.current_page + 1;
                     }
                     pagination.innerHTML = `
                        <div class="d-flex justify-content-between">
                           <div style="min-width: 100px; margin-right: 10px">
                              <p class="text-center" style="top: 0px; left: 25px;">Всего страниц: ${res.data.last_page}. Всего заказов: ${res.data.total}</p>
                           </div>
                     
                           <div class="buttons-wrapper d-flex justify-content-end">
                              <div class="change__buttons-group">
                                 <div class="d-flex justify-content-center">
                                    <button name="${prevPage}" class="btn btn-outline-secondary change-page-btn prevPage" style="border-bottom-right-radius: 0px; border-top-right-radius: 0px;"><i class="fas fa-chevron-left fa-xs"></i></button>
                                    <div id="buttonsWrapper" class="d-flex"></div>
                                    <button name="${nextPage}" class="btn btn-outline-secondary change-page-btn nextPage" style="border-bottom-left-radius: 0px; border-top-left-radius: 0px;"><i class="fas fa-chevron-right fa-xs"></i></button>
                                 </div>
                              </div>
                     
                           </div>
                        </div>
                     `;
                     tableWrapper.append(pagination);
                     const buttonsWrapepr = tableWrapper.querySelector('#buttonsWrapper')
                     buttons.forEach(btn => {
                        buttonsWrapepr.append(btn);
                     })
                     addPagination();
                  } else {
                     alert(data.error);
                  }
                  hideLoader();
               }
         });
      }
      
      function addPagination() {
         const buttons = document.querySelectorAll('.change__buttons-group button');
         buttons.forEach(btn => 
            btn.addEventListener('click', (e) => {
               const $target = e.target.closest('button');
               const page = parseInt($target.name);
               const number = document.querySelector('[name="number"]').value;
               const status = document.querySelector('[name="status"]').value;
               const data = `number=${number}&status=${status}`;
               console.log(status, 'stat');
               if (!$target.classList.contains('page-indicator')) {
                  if (page !== 3) {
                     document.querySelector('.nextPage').name = page + 1;
                  }
                  if (page !== 1) {
                     document.querySelector('.prevPage').name = page - 1;
                  }
                  renderTable(data, page);
               }
               buttons.forEach(btn => {
                  $btn = btn.closest('button');
                  $btn.classList.remove('page-indicator');
                  if ($btn.id == page) {
                     $btn.classList.add('page-indicator');
                  }
               })
            })
         )
      }

      function setFavorite(e, id) {
         showLoader();
         const body = { order_id: id };

         postData('{{ Route('Favorite') }}', body)
               .then(res => {
                  hideLoader();
                  if (res.status === true) {
                     let alertBody = document.getElementById('alertBody');
                     if (e.target.classList.contains('far')) {
                        alertBody.innerHTML = "Вы успешно добавили заказ в избранное.";
                     } else {
                        alertBody.innerHTML = "Вы убрали заказ из избранного.";
                     }
                     e.target.classList.toggle('fas');
                     e.target.classList.toggle('far');
                     toastList[0].show();
                  } else {
                     alert(res.error);
                  }
               })
      }

      function copyOrder(id) {
         showLoader();
         const body = { order_id: id };

         postData('{{ Route('CopyOrder') }}', body)
               .then(res => {
                  hideLoader();
                  if (res.status === true) {
                     alertBody.innerHTML = "Вы успешно скопировали заказ.";
                     toastList[0].show();
                  } else {
                     alert(res.error);
                  }
               })
      }

      function selectOrder(id) {
         showLoader();
         const body = { order_id: id };

         const promise = postData('{{ Route('SelectOrder') }}', body)
               .then(res => {
                  hideLoader();
                  if (res.status === true) {
                     return res.data;
                  } else {
                     return res.error;
                  }
               })

         return promise;
      }

      function redactOrder(id) {
         window.location.href = `/client/blank/${id}`
      }
   </script>

@include('pagination')
</div>