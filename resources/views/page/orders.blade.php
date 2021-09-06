<div class="row text-input">
   <form id="filter" style="display: flex">
      @csrf
      <div class="card-input col-4 row">
         <label for="number" class="col-form-label col-sm-3">Номер:</label>
         <div class="col-sm-9 p-0">
            <input type="text" id="number" name="number" class="form-control">
         </div>
      </div>
      <div class="card-input col-3 row ms-1">
         <label for="number" class="col-form-label col-sm-4">Статус:</label>
         <div class="col-sm-8 p-0">
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
           <th scope="col">Сумма</th>
           <th scope="col">Комиссия</th>
           <th scope="col">Статус</th>
           <th scope="col">Дата/Время</th>
           <th scope="col">Операции</th>
           <th scope="col">Примечания</th>
         </tr>
       </thead>
       <tbody id="table-body">
         @foreach($table as $result)
            <tr>
               <td>{{$result->number}}</td>
               <td>@if($result->status == 1) Отправлен @elseif($result->status == 2) Прибыл @elseif($result->status == 3) Упаковывается @elseif($result->status == 4) Обрабатывается @endif</td>
               <td class="table-summ">{{$result->cost}}</td>
               <td class="table-commission">{{$result->commission}}%</td>
               <td>{{$result->status2}}</td>
               <td>{{$result->datetime}}</td>
               <td align="right">
                  <a href="#"><i class="far fa-file-alt"></i></a>
                  <a href="#"><i class="fas fa-download"></i></a>
                  <a href="#"><i class="far fa-copy"></i></a>
               </td>
               <td align="center" style="background-color: #eaf5cb;"><i class="fas fa-info-circle"></i></td>
            </tr>
         @endforeach
       </tbody>
   </table>
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
                           <td>....</td>
                           <td>...</td>
                        `;
                        tbody.append(tr);
                     })
                     table.append(tbody);
                  } else {
                     alert(data.error);
                  }
               }
         });
      });
   </script>
</div>
<div class="change__page-wrapper">
   <div class="buttons-wrapper d-flex justify-content-end">

      <div class="change__buttons-group">
         <div class="d-flex justify-content-center">
            <button class="btn btn-outline-secondary change-page-btn" style="border-bottom-right-radius: 0px; border-top-right-radius: 0px;"><i class="fas fa-chevron-left fa-xs"></i></button>
            <div class="page-indicator">
               <p>1</p>
            </div>
            <button class="btn btn-outline-secondary change-page-btn" style="border-bottom-left-radius: 0px; border-top-left-radius: 0px;"><i class="fas fa-chevron-right fa-xs"></i></button>
         </div>
      </div>

      <div class="change__buttons-group ms-4">
         <select class="form-select" aria-label="select-page" style="width: 80px; padding: 4px 6px;">
            <option selected>1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
         </select>
      </div>

   </div>
</div>