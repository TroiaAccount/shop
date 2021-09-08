<div class="table__wrapper mt-3">
   <table class="table table-bordered">
      <!-- <thead>
         <tr>
            <th scope="col">Фото накладной</th>
            <th scope="col">Дата</th>
            <th scope="col">Кг</th>
            <th scope="col">Цена</th>
            <th scope="col">Общая сумма</th>
            <th scope="col">Примечание</th>
            <th scope="col">Работник</th>
            <th scope="col">Время добавления</th>
         </tr>
      </thead>
      <tbody id="table-body">
         <tr class="align-middle">
            <td class="delivery-row"></td>
            <td>2020-11-24</td>
            <td>3.50</td>
            <td>36.00</td>
            <td>126.00</td>
            <td>5886-94</td>
            <td>admirated</td>
            <td>2020-11-24</td>
         </tr>
         <tr class="align-middle">
            <td class="delivery-row"></td>
            <td>2020-11-24</td>
            <td>3.50</td>
            <td>36.00</td>
            <td>126.00</td>
            <td>5886-94</td>
            <td>admirated</td>
            <td>2020-11-24</td>
         </tr>
         <tr class="align-middle">
            <td class="delivery-row"></td>
            <td>2020-11-24</td>
            <td>3.50</td>
            <td>36.00</td>
            <td>126.00</td>
            <td>5886-94</td>
            <td>admirated</td>
            <td>2020-11-24</td>
         </tr>
      </tbody> -->
      <!-- ПО РОСИИ -->
      <thead>
         <tr>
            <th scope="col">Фото накладной</th>
            <th scope="col">Дата</th>
            <th scope="col">Рубли</th>
            <th scope="col">Курс</th>
            <th scope="col">Юани</th>
            <th scope="col">Транспортная компания</th>
            <th scope="col">Трек номер</th>
            <th scope="col">Примечание</th>
            <th scope="col">Время добавления</th>
         </tr>
      </thead>
      <tbody id="table-body">
         
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