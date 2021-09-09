<div class="table__wrapper mt-3">
   <form id="CreateOrder" enctype="multipart/form-data">
      @csrf
      <div class="form-wrapper">
         <div class="card-input row">
            <label for="number" class="col-form-label col-sm-3">Фото товара:</label>
            <div id="filesGroup" class="col-sm-9 p-0">
               <div class="input-group">
                  <input type="file" name="image-1" class="form-control m-0 files-input" required>
                  <span class="input-group-text add__input-btn" style="cursor: pointer;" data-input="files"><i class="fas fa-xs fa-plus"></i></span>
               </div>
            </div>
         </div>
         <div class="card-input row mt-2">
            <label for="number" class="col-form-label col-sm-3">Ссылка на фото:</label>
            <div id="UrlPhotoGroup" class="col-sm-9 p-0">
               <div class="input-group">
                  <input type="text" name="ImageUrl-1" class="form-control m-0 urlPhotos-input">
                  <span class="input-group-text add__input-btn" style="cursor: pointer;" data-input="urlPhoto"><i class="fas fa-xs fa-plus"></i></span>
               </div>
            </div>
         </div>
         <div class="card-input row mt-2">
            <label for="number" class="col-form-label col-sm-3">Ссылка на товар:</label>
            <div id="UrlProductGroup" class="col-sm-9 p-0">
               <div class="input-group">
                  <input type="text" name="url-1" class="form-control m-0 urlProduct-input" required>
                  <span class="input-group-text add__input-btn" style="cursor: pointer;" data-input="urlProduct"><i class="fas fa-xs fa-plus"></i></span>
               </div>
            </div>
         </div>
         <div class="card-input row mt-2">
            <label for="number" class="col-form-label col-sm-3">Кол-во штук:</label>
            <div class="col-sm-9 p-0">
               <input type="text" name="count" class="form-control m-0">
            </div>
         </div>
         <div class="card-input row mt-2">
            <label for="number" class="col-form-label col-sm-3">Цена:</label>
            <div class="col-sm-9 p-0">
               <input type="text" name="cost" class="form-control m-0">
            </div>
         </div>
         <div class="card-input row mt-2">
            <label for="number" class="col-form-label col-sm-3">Цвет:</label>
            <div class="col-sm-9 p-0">
               <input type="text" name="color" class="form-control m-0">
            </div>
         </div>
         <div class="card-input row mt-2">
            <label for="number" class="col-form-label col-sm-3">Размер:</label>
            <div class="col-sm-9 p-0">
               <input type="text" name="size" class="form-control m-0">
            </div>
         </div>
         <div class="card-input row mt-2">
            <label for="number" class="col-form-label col-sm-3">Модель:</label>
            <div class="col-sm-9 p-0">
               <input type="text" name="model" class="form-control m-0">
            </div>
         </div>

         <div class="mt-3 row justify-content-center">
            <button type="submit" class="btn btn-primary col-2">Создать</button>
         </div>
      </div>
     
   </form>
</div>
<script>
   const addBtn = document.querySelectorAll('.add__input-btn');
   let fileInd = 1,
       photoInd = 1,
       productInd = 1;

   addBtn.forEach((btn) => {
      btn.addEventListener('click', () => {
         switch (btn.dataset.input) {
            case 'files':
               inputs = document.querySelectorAll('.files-input');
               if (inputs.length < 5) {
                  fileInd = fileInd + 1;
                  const input = document.createElement('div');
                  input.classList.add('input-group', 'mt-2');
                  const span = document.createElement('span');
                  span.classList.add('input-group-text');
                  span.style.cursor = 'pointer';
                  span.innerHTML = '<i class="fas fa-xs fa-minus"></i>';
                  input.innerHTML = `
                     <input type="file" name="image-${fileInd}" class="form-control m-0 files-input" required>
                  `
                  input.append(span);
                  span.addEventListener('click', () => input.remove())
                  document.querySelector('#filesGroup').append(input);
               } else {
                  alert('Вы добавили максимальное кол-во файлов');
               }
               break;
            case 'urlPhoto':
               inputs = document.querySelectorAll('.urlPhotos-input');
               if (inputs.length < 5) {
                  photoInd = photoInd + 1;
                  const input = document.createElement('div');
                  input.classList.add('input-group', 'mt-2');
                  const span = document.createElement('span');
                  span.classList.add('input-group-text');
                  span.style.cursor = 'pointer';
                  span.innerHTML = '<i class="fas fa-xs fa-minus"></i>';
                  const i = ++inputs.length;
                  input.innerHTML = `
                     <input type="text" placeholder="Ссылка на фото товара" name="ImageUrl-${photoInd}" class="form-control m-0 urlPhotos-input">
                  `
                  input.append(span);
                  span.addEventListener('click', () => input.remove())
                  document.querySelector('#UrlPhotoGroup').append(input);
               } else {
                  alert('Вы добавили максимальное кол-во ссылок');
               }
               break;   
            case 'urlProduct':
               inputs = document.querySelectorAll('.urlProduct-input');
               if (inputs.length < 5) {
                  productInd = productInd + 1;
                  const input = document.createElement('div');
                  input.classList.add('input-group', 'mt-2');
                  const span = document.createElement('span');
                  span.classList.add('input-group-text');
                  span.style.cursor = 'pointer';
                  span.innerHTML = '<i class="fas fa-xs fa-minus"></i>';
                  const i = ++inputs.length;
                  input.innerHTML = `
                     <input type="text" placeholder="Ссылка на товар" name="url-${productInd}" class="form-control m-0 urlProduct-input" required>
                  `
                  input.append(span);
                  span.addEventListener('click', () => input.remove())
                  document.querySelector('#UrlProductGroup').append(input);
               } else {
                  alert('Вы добавили максимальное кол-во ссылок');
               }
               break;   
         }
         
      })
   })

   $("#CreateOrder").on("submit", function(e){
      e.preventDefault();
      const _token = $('[name="_token"]')[0].value,
         count = $('input[name="count"]')[0].value,
         cost = $('input[name="cost"]')[0].value,
         color = $('input[name="color"]')[0].value,
         model = $('input[name="model"]')[0].value,
         size = $('input[name="size"]')[0].value,
         files = document.querySelectorAll('input.files-input'),
         urlPhoto = document.querySelectorAll('input.urlPhotos-input'),
         urlProduct = document.querySelectorAll('input.urlProduct-input'),
         url = [],
         ImageUrl = [],
         image = [],
         pushDataToArray = (data, array) => {
            data.forEach(input => {
               array.push(input.value)
            })
         };

      pushDataToArray(urlProduct, url);
      pushDataToArray(urlPhoto, ImageUrl);
      pushDataToArray(files, image);

      const data = new FormData();
      data.append('count', count);
      data.append('cost', cost);
      data.append('color', color);
      data.append('model', model);
      data.append('size', size);
      data.append('url', JSON.stringify(url));
      data.append('ImageUrl', JSON.stringify(ImageUrl));
      data.append('image', JSON.stringify(image));

      $.ajax({
            headers: {
               'X-CSRF-TOKEN': _token
            },
            url: '{{Route("CreateOrder")}}',
            method: 'POST',
            data,
            dataType: 'json',
            processData: false,
            success: function(data){
               if(data.status == true){
                  console.log(data)
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
                     const pagination = document.getElementById('pagination');
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
