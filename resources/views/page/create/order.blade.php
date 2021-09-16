<form id="CreateOrder" enctype="multipart/form-data">
   @csrf
   <div class="form-wrapper container ps-0">
      <div class="card-input d-flex justify-content-between">
         <div id="photoInputs-0" class="order-card ms-3" style="min-width: 135px;">
            <div class="label-card">
               <label for="image[]" class="order-title">Фото товара:</label>
               <p class="order-subtitle">Загрузить фото товара для заказа</p>
            </div>
            <div id="filesGroup" class="mt-2 row" style="margin-top: 7.8px!important;">
               <p class="numeration">1</p>
               <div class="input-group col-3">
                  <input id="file-input" type="file" name="image[]" class="m-0 files-input" required>
                  <div class="file-label-wrapper w-100">
                     <label class="file-label" for="file-input">Загрузите фото товара</label>
                  </div>
               </div>
            </div>
         </div>
         <div id="urlPhotoInputs-0" class="order-card" style="min-width: 145px;">
            <div class="label-card">
               <label for="ImageUrl-1" class="order-title">Ссылка на фото:</label>
               <p class="order-subtitle">Вставьте ссылку на фото</p>
            </div>
            <div id="UrlPhotoGroup" class="mt-2 row">
               <div>
                  <input type="text" name="ImageUrl-1" class="m-0 urlPhotos-input text-order-input" placeholder="Вставьте ссылку на фото" required>
               </div>
            </div>
         </div>
         <div id="urlProductInputs-0" class="order-card" style="min-width: 150px;">
            <div class="label-card">
               <label for="ImageUrl-1" class="order-title">Ссылка на товар:</label>
               <p class="order-subtitle">Вставьте ссылку на товар</p>
            </div>
            <div id="UrlProductGroup" class="mt-2 row">
               <div class="position-relative">
                  <input type="text" name="url-1" class="m-0 urlProduct-input text-order-input" placeholder="Вставьте ссылку на товар" required>
                  <span id="plusGreen-0" class="plus-green-btn"><i class="fas fa-plus"></i></span>
               </div>
            </div>
         </div>
         <div class="order-card ms-3" style="min-width: 120px;">
            <div class="label-card">
               <label for="count" class="order-title">Кол-во штук:</label>
               <p class="order-subtitle">Укажите количество штук</p>
            </div>
            <div class="mt-2 row">
               <div>
                  <input type="number" name="count" class="m-0 text-order-input" required>
               </div>
            </div>
         </div>
         <div class="order-card" style="min-width: 105px;">
            <div class="label-card">
               <label for="cost" class="order-title">Цена:</label>
               <p class="order-subtitle">Укажите цену как на сайте</p>
            </div>
            <div class="mt-2 row">
               <div>
                  <input type="text" name="cost" class="m-0 text-order-input" required>
               </div>
            </div>
         </div>
         <div class="order-card" style="min-width: 95px;">
            <div class="label-card">
               <label for="color" class="order-title">Цвет:</label>
               <p class="order-subtitle">Укажите нужный цвет</p>
            </div>
            <div class="mt-2 row">
               <div>
                  <input type="text" name="color" class="m-0 text-order-input" required>
               </div>
            </div>
         </div>
         <div class="order-card" style="min-width: 105px;">
            <div class="label-card">
               <label for="size" class="order-title">Размер:</label>
               <p class="order-subtitle">Укажите нужный размер</p>
            </div>
            <div class="mt-2 row">
               <div>
                  <input type="number" name="size" class="m-0 text-order-input" required>
               </div>
            </div>
         </div>
         <div class="order-card" style="min-width: 135px;">
            <div class="label-card">
               <label for="model" class="order-title">Модель:</label>
               <p class="order-subtitle">Укажите необходимую модель</p>
            </div>
            <div class="mt-2 row">
               <div class="position-relative me-2">
                  <input type="text" name="model" class="m-0 text-order-input" required>
                  <span id="plusBlue-0" class="plus-blue-btn"><i class="fas fa-plus"></i></span>
               </div>
            </div>
         </div>
         <div class="order-card">
            <div class="space"></div>
         </div>
      </div>
   </div>
</form>

<script>
   const input = document.querySelector('[name="image[]"]')
   input.addEventListener('change', () => {
      alert('Файл успешно добавлен')
      console.log(input)
   })

   const greenPlusBtn = document.querySelector('.plus-green-btn');
   let countOfMainInputs = 0;

   const greenBtnHandler = (id) => {
      const photoInputs = document.querySelector(`#photoInputs-${id}`),
            urlPhotoInputs = document.querySelector(`#urlPhotoInputs-${id}`),
            urlProductInputs = document.querySelector(`#urlProductInputs-${id}`);

      const file = document.createElement('div'),
            url = document.createElement('div'),
            product = document.createElement('div');

      if (photoInputs.childElementCount < 3) {
            for (let i = 0; i < 3; i++) {
            const fileInputWrapper = document.createElement('div'),
                  urlInputWrapper = document.createElement('div'),
                  productInputWrapper = document.createElement('div');
            fileInputWrapper.innerHTML = `
               <div id="filesGroup" class="mt-2 rowms-2" style="margin-top: 7.8px!important;">
                     <p class="subnumeration ms-2">${id + 1}.${i + 1}</p>
                     <div class="input-group col-3 p-0">
                        <input id="file-input" type="file" name="image[]" class="m-0 files-input" required>
                        <div class="file-label-wrapper ms-4">
                           <label class="file-label-mini" for="file-input">Загрузите фото товара</label>
                        </div>
                     </div>
               </div>
            `;
            urlInputWrapper.innerHTML = `
               <div id="UrlPhotoGroup" class="row">
                  <div>
                     <input type="text" name="ImageUrl-1" class="m-0 urlPhotos-input text-order-input mini-input" placeholder="Вставьте ссылку на фото" required>
                  </div>
               </div>
            `;
            productInputWrapper.innerHTML = `
               <div id="UrlProductGroup" class="row">
                  <div class="position-relative">
                     <input type="text" name="url-1" class="m-0 urlProduct-input text-order-input mini-input" placeholder="Вставьте ссылку на товар" required>
                  </div>
               </div>
            `;
            file.append(fileInputWrapper);
            url.append(urlInputWrapper);
            product.append(productInputWrapper);
         }
         photoInputs.append(file);
         urlPhotoInputs.append(url);
         urlProductInputs.append(product);
      }      
   }
   greenPlusBtn.addEventListener('click', () => greenBtnHandler(0))

   const bluePlusBtn = document.querySelector('#plusBlue-0');
   const blueBtnHandler = () => {
      const formWrapper = document.querySelector('.form-wrapper'),
            div = document.createElement('div');

      countOfMainInputs++;
      const count = countOfMainInputs;

      div.innerHTML = `
         <div class="card-input d-flex justify-content-between">
            <div id="photoInputs-${count}" class="order-card ms-3" style="min-width: 135px;">
               <div></div>
               <div id="filesGroup" class="mt-2 row" style="margin-top: 7.8px!important;">
                  <p class="numeration">${count + 1}</p>
                  <div class="input-group col-3">
                     <input id="file-input" type="file" name="image[]" class="m-0 files-input" required>
                     <div class="file-label-wrapper w-100">
                        <label class="file-label" for="file-input">Загрузите фото товара</label>
                     </div>
                  </div>
               </div>
            </div>
            <div id="urlPhotoInputs-${count}" class="order-card" style="min-width: 145px;">
               <div id="UrlPhotoGroup" class="mt-2 row">
                  <div>
                     <input type="text" name="ImageUrl-1" class="m-0 urlPhotos-input text-order-input" placeholder="Вставьте ссылку на фото" required>
                  </div>
               </div>
            </div>
            <div id="urlProductInputs-${count}" class="order-card" style="min-width: 150px;">
               <div id="UrlProductGroup" class="mt-2 row">
                  <div class="position-relative">
                     <input type="text" name="url-1" class="m-0 urlProduct-input text-order-input" placeholder="Вставьте ссылку на товар" required>
                     <span id="plusGreen-${count}" class="plus-green-btn"><i class="fas fa-plus"></i></span>
                  </div>
               </div>
            </div>
            <div class="order-card ms-3" style="min-width: 120px;">
               <div class="mt-2 row">
                  <div>
                     <input type="number" name="count" class="m-0 text-order-input" required>
                  </div>
               </div>
            </div>
            <div class="order-card" style="min-width: 105px;">
               <div class="mt-2 row">
                  <div>
                     <input type="text" name="cost" class="m-0 text-order-input" required>
                  </div>
               </div>
            </div>
            <div class="order-card" style="min-width: 95px;">
               <div class="mt-2 row">
                  <div>
                     <input type="text" name="color" class="m-0 text-order-input" required>
                  </div>
               </div>
            </div>
            <div class="order-card" style="min-width: 105px;">
               <div class="mt-2 row">
                  <div>
                     <input type="number" name="size" class="m-0 text-order-input" required>
                  </div>
               </div>
            </div>
            <div class="order-card" style="min-width: 135px;">
               <div class="mt-2 row">
                  <div class="position-relative me-2">
                     <input type="text" name="model" class="m-0 text-order-input" required>
                     <span id="plusBlue-${count}" class="plus-blue-btn"><i class="fas fa-plus"></i></span>
                  </div>
               </div>
            </div>
            <div class="order-card">
               <div class="space"></div>
            </div>
         </div>
      `
      formWrapper.append(div);
      const greenPlusBtn = document.querySelector(`#plusGreen-${count}`),
            bluePlusBtn = document.querySelector(`#plusBlue-${count}`);

      greenPlusBtn.addEventListener('click', () => greenBtnHandler(count));
      bluePlusBtn.addEventListener('click', blueBtnHandler);
   }
   bluePlusBtn.addEventListener('click', blueBtnHandler);
</script>