<div class="table__wrapper mt-3">
   <form id="CreateOrder" enctype="multipart/form-data">
      @csrf
      <div class="card-input col-4 row">
         <label for="number" class="col-form-label col-sm-3">Фото товара:</label>
         <div class="col-sm-9 p-0">
            <input type="file" name="image[]" class="form-control">
         </div>
      </div>
      <div class="card-input col-4 row">
         <label for="number" class="col-form-label col-sm-3">Ссылка на фото:</label>
         <div class="col-sm-9 p-0">
            <input type="text" name="ImageUrl[]" class="form-control">
         </div>
      </div>
      <div class="card-input col-4 row">
         <label for="number" class="col-form-label col-sm-3">Ссылка на товар:</label>
         <div class="col-sm-9 p-0">
            <input type="text" name="url[]" class="form-control">
         </div>
      </div>
      <div class="card-input col-4 row">
         <label for="number" class="col-form-label col-sm-3">Кол-во штук:</label>
         <div class="col-sm-9 p-0">
            <input type="text" name="count" class="form-control">
         </div>
      </div>
      <div class="card-input col-4 row">
         <label for="number" class="col-form-label col-sm-3">Цена:</label>
         <div class="col-sm-9 p-0">
            <input type="text" name="cost" class="form-control">
         </div>
      </div>
      <div class="card-input col-4 row">
         <label for="number" class="col-form-label col-sm-3">Цвет:</label>
         <div class="col-sm-9 p-0">
            <input type="text" name="color" class="form-control">
         </div>
      </div>
      <div class="card-input col-4 row">
         <label for="number" class="col-form-label col-sm-3">Размер:</label>
         <div class="col-sm-9 p-0">
            <input type="text" name="size" class="form-control">
         </div>
      </div>
      <div class="card-input col-4 row">
         <label for="number" class="col-form-label col-sm-3">Модель:</label>
         <div class="col-sm-9 p-0">
            <input type="text" name="model" class="form-control">
         </div>
      </div>

      <div class="col-4">
         <button type="submit" class="btn btn-primary">Создать</button>
      </div>
   </form>
</div>
<script>
   $("#CreateOrder").on("submit", function(e){
      e.preventDefault();
      $.ajax({
            url: '{{Route("CreateOrder")}}',
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
</script>
