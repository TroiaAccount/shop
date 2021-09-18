<form id="CreateOrder" enctype="multipart/form-data">
   @csrf
   <div class="form-wrapper container ps-0">
      <div id="0" class="card-input d-flex justify-content-between">
         <div id="photoInputs-0" class="order-card ms-3" style="min-width: 135px;" data-count="0">
            <div class="label-card">
               <label class="order-title">Фото товара:</label>
               <p class="order-subtitle">Загрузить фото товара для заказа</p>
            </div>
            <div id="filesGroup" class="mt-2 row" style="margin-top: 15.4px!important;">
               <p class="numeration">1</p>
               <div class="input-group col-3">
                  <input id="file-input-0-0" type="file" name="0" class="m-0 files-input" onchange="getImageUrl(event)">
                  <div class="file-label-wrapper w-100">
                     <label class="file-label" for="file-input-0-0">Загрузите фото товара</label>
                  </div>
               </div>
            </div>
         </div>
         <div id="urlPhotoInputs-0" class="order-card" style="min-width: 145px;">
            <div class="label-card">
               <label for="ImageUrl-1" class="order-title">Ссылка на фото:</label>
               <p class="order-subtitle">Вставьте ссылку на фото</p>
            </div>
            <div id="UrlPhotoGroup" class="mt-3 row">
               <div>
                  <input type="text" name="ImageUrl" class="m-0 urlPhotos-input text-order-input" placeholder="Вставьте ссылку на фото" required>
               </div>
            </div>
         </div>
         <div id="urlProductInputs-0" class="order-card" style="min-width: 150px;">
            <div class="label-card">
               <label for="ImageUrl-1" class="order-title">Ссылка на товар:</label>
               <p class="order-subtitle">Вставьте ссылку на товар</p>
            </div>
            <div id="UrlProductGroup" class="mt-3 row">
               <div class="position-relative">
                  <input type="text" name="url" class="m-0 urlProduct-input text-order-input" placeholder="Вставьте ссылку на товар" required>
                  <span id="plusGreen-0" class="plus-green-btn"><i class="fas fa-plus"></i></span>
               </div>
            </div>
         </div>
         <div class="order-card ms-3" style="min-width: 120px;">
            <div class="label-card">
               <label for="count" class="order-title">Кол-во штук:</label>
               <p class="order-subtitle">Укажите количество штук</p>
            </div>
            <div class="mt-3 row">
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
            <div class="mt-3 row">
               <div>
                  <input type="number" name="cost" class="m-0 text-order-input" required>
               </div>
            </div>
         </div>
         <div class="order-card" style="min-width: 95px;">
            <div class="label-card">
               <label for="color" class="order-title">Цвет:</label>
               <p class="order-subtitle">Укажите нужный цвет</p>
            </div>
            <div class="mt-3 row">
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
            <div class="mt-3 row">
               <div>
                  <input type="text" name="size" class="m-0 text-order-input" required>
               </div>
            </div>
         </div>
         <div class="order-card" style="min-width: 135px;">
            <div class="label-card">
               <label for="model" class="order-title">Модель:</label>
               <p class="order-subtitle">Укажите необходимую модель</p>
            </div>
            <div class="mt-3 row">
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
   <div class="mt-4 submitBtn">
      <button class="btn btn-primary">Создать заказ</button>
   </div>
</form>

<script>
   document.querySelector('#CreateOrder').addEventListener('submit', (e) => {
      e.preventDefault();
      makeOrder();
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

      photoInputs.dataset.count++;
      const count = photoInputs.dataset.count;
      const style = count > 9 ? 'left: -17px;' : '';
   
      const minusBtn = document.createElement('span');
      minusBtn.innerHTML = '<i class="fas fa-minus"></i>';
      minusBtn.style.cssText = `
         cursor: pointer;
         position: absolute;
         top: 10px;
         right: 5px;
         color: #dc3545;
      `

      file.innerHTML = `
         <div id="filesGroup" class="mt-2 rowms-2" style="margin-top: 7.8px!important;">
               <p class="subnumeration ms-2" style="${style}">${id + 1}.${count}</p>
               <div class="input-group col-3 p-0">
                  <input id="file-input-${id}-${count}" type="file" name="${id}" class="m-0 files-input"  onchange="getImageUrl(event)">
                  <div class="file-label-wrapper ms-4">
                     <label class="file-label-mini" for="file-input-${id}-${count}">Загрузите фото товара</label>
                  </div>
               </div>
         </div>
      `;
      url.innerHTML = `
         <div id="UrlPhotoGroup" class="row">
            <div>
               <input type="text" name="ImageUrl" class="m-0 urlPhotos-input text-order-input mini-input" placeholder="Вставьте ссылку на фото" required>
            </div>
         </div>
      `;
      product.innerHTML = `
         <div id="UrlProductGroup" class="row">
            <div class="position-relative">
               <input type="text" name="url" class="m-0 urlProduct-input text-order-input mini-input" placeholder="Вставьте ссылку на товар" required>
            </div>
         </div>
      `;
      product.lastElementChild.lastElementChild.append(minusBtn);
      minusBtn.addEventListener('click', () => {
         file.remove();
         url.remove();
         product.remove();
         photoInputs.dataset.count--;
      });

      photoInputs.append(file);
      urlPhotoInputs.append(url);
      urlProductInputs.append(product);
   }
   greenPlusBtn.addEventListener('click', () => greenBtnHandler(0))

   const bluePlusBtn = document.querySelector('#plusBlue-0');
   const blueBtnHandler = () => {
      const formWrapper = document.querySelector('.form-wrapper'),
            div = document.createElement('div');

      countOfMainInputs++;
      const count = countOfMainInputs;

      div.innerHTML = `
         <div id="${count}" class="card-input d-flex justify-content-between">
            <div id="photoInputs-${count}" class="order-card ms-3" style="min-width: 135px;" data-count="0">
               <div></div>
               <div id="filesGroup" class="mt-2 row" style="margin-top: 7.8px!important;">
                  <p class="numeration">${count + 1}</p>
                  <div class="input-group col-3">
                     <input id="file-input-${count}-0" type="file" name="${count}" class="m-0 files-input"  onchange="getImageUrl(event)">
                     <div class="file-label-wrapper w-100">
                        <label class="file-label" for="file-input-${count}-0">Загрузите фото товара</label>
                     </div>
                  </div>
               </div>
            </div>
            <div id="urlPhotoInputs-${count}" class="order-card" style="min-width: 145px;">
               <div id="UrlPhotoGroup" class="mt-2 row">
                  <div>
                     <input type="text" name="ImageUrl" class="m-0 urlPhotos-input text-order-input" placeholder="Вставьте ссылку на фото" required>
                  </div>
               </div>
            </div>
            <div id="urlProductInputs-${count}" class="order-card" style="min-width: 150px;">
               <div id="UrlProductGroup" class="mt-2 row">
                  <div class="position-relative">
                     <input type="text" name="url" class="m-0 urlProduct-input text-order-input" placeholder="Вставьте ссылку на товар" required>
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
                     <input type="text" name="size" class="m-0 text-order-input" required>
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

   const photosUrl = {};

   async function getImageUrl(e) {
      file = e.target.files[0];
      const _token = document.querySelector('[name="_token"]').value;
      const formData = new FormData();
      formData.append('image', file);
      formData.append('_token', _token);
      let res = await fetch('{{Route("UploadOrderPhoto")}}', {
         method: 'POST',
         body: formData
      })
      res = await res.json();
      if (photosUrl[e.target.getAttribute('name')]) {
         photosUrl[e.target.getAttribute('name')] = [...photosUrl[e.target.getAttribute('name')], res.url];
      } else {
         photosUrl[e.target.getAttribute('name')] = [res.url];
      }
      
   }

   async function makeOrder() {
      const dataToServer = [];
      for (let i = 0; i <= countOfMainInputs; i++) {
         const data = {},
               photos = [],
               urlPhotos = [],
               urlProducts = [],
               mainInput = document.getElementById(i),
               urlPhotoInputs = mainInput.querySelectorAll('[name="ImageUrl"]'),
               urlProductInputs = mainInput.querySelectorAll('[name="url"]'),
               count = mainInput.querySelector('[name="count"]').value,
               cost = mainInput.querySelector('[name="cost"]').value,
               color = mainInput.querySelector('[name="color"]').value,
               size = mainInput.querySelector('[name="size"]').value,
               model = mainInput.querySelector('[name="model"]').value;

         const makeData = (inputs, array, fieldName) => {
            data[fieldName] = array;
            inputs.forEach(input => {
               data[fieldName].push(input.value);
            })
         }
         
         photosUrl[i].forEach(url => {
            photos.push(url);
         })
         makeData(urlPhotoInputs, urlPhotos, 'PhotoUrl');
         makeData(urlProductInputs, urlProducts, 'ProductUrl');
         data['Photo'] = photos;
         data['count'] = parseInt(count);
         data['cost'] = parseInt(cost);
         data['color'] = color;
         data['size'] = size;
         data['model'] = model;
         dataToServer.push(data);
      }
      const res = await fetch('{{Route("CreateOrder")}}', {
         method: 'POST',
         headers: {
            'Content-type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('[name="_token"]').value
         },
         body: JSON.stringify(dataToServer)
      })
      console.log(JSON.stringify(dataToServer));
      console.log(await res.json());
   }
   
</script>