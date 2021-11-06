<div class="row text-input">
   <form id="filter" style="display: flex">
      @csrf
      <div class="card-input col-4 row">
         <label for="number" class="col-form-label col-sm-5">Номер:</label>
         <div class="col-sm-7 p-0">
            <input type="text" id="number" name="number" class="form-control">
         </div>
      </div>
      <div class="card-input col-5 row ms-1">
         <label for="number" class="col-form-label col-sm-4">Статус:</label>
         <div class="col-sm-7 p-0">
            <select class="form-select" aria-label="Выбор статуса" name="status">
               <option value="" selected>Не указано</option>
               <option value="1">Отправлен</option>
               <option value="2">Прибыл</option>
               <option value="3">Упаковывается</option>
               <option value="4">Обрабатывается</option>
            </select>
         </div>
      </div>
      <div class="col-4">
         <button type="submit" class="btn btn-primary">Поиск</button>
      </div>
   </form>
</div>
<div class="table__wrapper mt-3">
   <table class="table table-bordered">
      <thead>
         <tr>
            <th scope="col">Номер</th>
            <th scope="col">Сохранён/Оформлен</th>
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
               <td>{{$result->status2}}</td>
               <td>{{$result->datetime}}</td>
               <td align="right">
                  <a onclick="redactOrder({{ $result->id }})" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Редактировать" class="hovered-link green"><i class="far fa-edit"></i></a>
                  <a onclick="setFavorite({{ $result->id }})" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Добавить в избранные" class="hovered-link red"><i class="@if($result->favorite == 1) fas @else far @endif fa-heart"></i></a>
                  <a onclick="copyOrder({{ $result->id }})" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Копировать" class="hovered-link yellow"><i class="far fa-copy"></i></a>
               </td>
               <td align="center" style="background-color: #eaf5cb;"><i class="fas fa-info-circle"></i></td>
            </tr>
         @endforeach
      </tbody>
   </table>
   <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
      <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">git 
        <div class="toast-header">
          <strong class="me-auto">CNSHOP</strong>
          <small>now</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" id="alertBody">
            Вы успешно добавили заказ в избранное.
        </div>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script>
      $("#filter").on("submit", function(e){
         e.preventDefault();
         $.ajax({
               url: '{{Route("Filter")}}',
               method: 'post',
               dataType: 'json',
               data: $(this).serialize(),
               success: function(data){
                  if(data.status == true){
                     const table = document.querySelector('.table-bordered');
                     table.querySelector('#table-body').remove();
                     const tbody = document.createElement(`tbody`);
                     tbody.setAttribute('id', 'table-body');
                     data.data.forEach(item => {
                        const tr = document.createElement('tr');
                        let status;
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
                        tr.innerHTML = `
                           <td>${item.number}</td>
                           <td>${status}</td>
                           <td class="table-summ">${item.cost}</td>
                           <td class="table-commission">${item.commission}%</td>
                           <td>${item.status2}</td>
                           <td>${item.datetime}</td>
                           <td align="right">
                              <a onclick="redactOrder( ${item.id })" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Редактировать"><i class="far fa-edit"></i></a>
                              <a onclick="setFavorite(${item.id })" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Добавить в избранные"><i class="far fa-heart"></i></a>
                              <a onclick="copyOrder(${item.id })" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Копировать"><i class="far fa-copy"></i></a>
                           </td>
                           <td align="center" style="background-color: #eaf5cb;"><i class="fas fa-info-circle"></i></td>
                        `;
                        tbody.append(tr);
                        let pagination = document.getElementById('pagination');
                        pagination.style.display = "none";
                     })
                     table.append(tbody);
                  } else {
                     alert(data.error);
                  }
               }
         });
      });

      const toastElList = [].slice.call(document.querySelectorAll('.toast'));
      const toastList = toastElList.map(function (toastEl) {
         return new bootstrap.Toast(toastEl);
      })
      
      function setFavorite(id) {
         const body = { order_id: id };

         postData('{{ Route('Favorite') }}', body)
               .then(res => {
                  if (res.status === true) {
                     let alertBody = document.getElementById('alertBody');
                     alertBody.innerHTML = "Вы успешно добавили заказ в избранное.";
                     toastList[0].show();
                  } else {
                     alert(res.error);
                  }
               })
      }

      function copyOrder(id) {
         const body = { order_id: id };

         postData('{{ Route('CopyOrder') }}', body)
               .then(res => {
                  if (res.status === true) {
                     alertBody.innerHTML = "Вы успешно скопировали заказ.";
                     toastList[0].show();
                  } else {
                     alert(res.error);
                  }
               })
      }

      function selectOrder(id) {
         const body = { order_id: id };

         const promise = postData('{{ Route('SelectOrder') }}', body)
               .then(res => {
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