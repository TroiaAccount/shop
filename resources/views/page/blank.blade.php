<form id="CreateOrder" enctype="multipart/form-data">
   @csrf
   <div class="form-wrapper container ps-0" style="margin-bottom: 4rem!important;">
      <div id="0" class="card-input d-flex justify-content-between">
         <div id="photoInputs-0" class="order-card ms-3" style="min-width: 135px;" data-count="0">
            <div class="label-card">
               <label class="order-title">Фото товара:</label>
               <p class="order-subtitle">Загрузить фото товара для заказа</p>
            </div>
         </div>
         <div id="urlPhotoInputs-0" class="order-card" style="min-width: 145px;">
            <div class="label-card">
               <label for="ImageUrl-1" class="order-title">Ссылка на фото:</label>
               <p class="order-subtitle">Вставьте ссылку на фото</p>
            </div>
         </div>
         <div id="urlProductInputs-0" class="order-card" style="min-width: 150px;">
            <div class="label-card">
               <label for="ImageUrl-1" class="order-title">Ссылка на товар:</label>
               <p class="order-subtitle">Вставьте ссылку на товар</p>
            </div>
         </div>
         <div class="order-card ms-3" style="min-width: 120px;">
            <div class="label-card">
               <label for="count" class="order-title">Кол-во штук:</label>
               <p class="order-subtitle">Укажите количество штук</p>
            </div>
         </div>
         <div class="order-card" style="min-width: 105px;">
            <div class="label-card">
               <label for="cost" class="order-title">Цена:</label>
               <p class="order-subtitle">Укажите цену как на сайте</p>
            </div>
         </div>
         <div class="order-card" style="min-width: 95px;">
            <div class="label-card">
               <label for="color" class="order-title">Цвет:</label>
               <p class="order-subtitle">Укажите нужный цвет</p>
            </div>
         </div>
         <div class="order-card" style="min-width: 105px;">
            <div class="label-card">
               <label for="size" class="order-title">Размер:</label>
               <p class="order-subtitle">Укажите нужный размер</p>
            </div>
         </div>
         <div class="order-card" style="min-width: 135px;">
            <div class="label-card">
               <label for="model" class="order-title">Модель:</label>
               <p class="order-subtitle">Укажите необходимую модель</p>
            </div>
         </div>
         <div class="order-card" style="margin-left: 24px;">
            <div class="space"></div>
         </div>
      </div>
   </div>
   <div class="mt-4 submitBtn">
      <button class="btn btn-primary">Сохранить заказ</button>
   </div>
</form>

<div class="modal" tabindex="-1" id="myModal">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title"></h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <div class="d-flex flex-column modal-content-wrapper">
            <div class="image">
               <img src="{{asset('/assets/images/no-image.png')}}" alt="">
            </div>
            <div class="file-input">
               <div class="widget-list">
                  <div class="row">
                     <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                           <div class="widget-body clearfix p-0 pt-3">
                              <input type="file" class="customInput" id="file1" onchange="getImageUrl(event)">
                              <label class="customInputLabel" for="file1">Выбрать фото</label>
                           </div>
                           <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                     </div>
               </div>
            </div>
         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Сохранить</button>
       </div>
     </div>
   </div>
 </div>

<script>
   const href = window.location.href.split('/'),
         _page_id = href[href.length - 1],
         photosUrl = {};
   let countOfMainInputs = 0;

   window.addEventListener('DOMContentLoaded', async () => {
      var myModal = new bootstrap.Modal(document.getElementById('myModal'))

      document.querySelector('#CreateOrder').addEventListener('submit', (e) => {
         e.preventDefault();
         makeOrder();
      })

      let data = await getData(_page_id);
      data = await JSON.parse(data.data);  

      const greenPlusBtn = document.querySelector('.plus-green-btn');

      const greenBtnHandler = (id, data) => {
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
                  <p class="subnumeration ms-2" style="${style}">${id}.${count}</p>
                  <div class="input-group col-3 p-0">
                     <input id="file-input-${id}-${count}" type="file" name="${id}" class="m-0 files-input" onchange="getImageUrl(event)">
                     <div class="file-label-wrapper ms-4">
                        <label class="file-label-mini" data-row="${id}" data-url="${data.photo}">Загрузите фото товара</label>
                     </div>
                  </div>
            </div>
         `;
         url.innerHTML = `
            <div id="UrlPhotoGroup" class="row">
               <div>
                  <input type="text" name="ImageUrl" class="m-0 urlPhotos-input text-order-input mini-input" placeholder="Вставьте ссылку на фото" value="${data.photoUrl}">
               </div>
            </div>
         `;
         product.innerHTML = `
            <div id="UrlProductGroup" class="row">
               <div class="position-relative">
                  <input type="text" name="url" class="m-0 urlProduct-input text-order-input mini-input" placeholder="Вставьте ссылку на товар" value="${data.productUrl}">
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

      const rowInnerHtml = (countRows, data) => {
         const div = document.createElement('div');
         const Photo = data['Photo'] ? data['Photo'] : '';
         const PhotoUrl = data['PhotoUrl'] ? data['PhotoUrl'] : '';
         const ProductUrl = data['ProductUrl'] ? data['ProductUrl'] : '';
         const color = data['color'] ? data['color'] : '';
         const cost = data['cost'] ? data['cost'] : '';
         const count = data['count'] ? data['count'] : '';
         const model = data['model'] ? data['model'] : '';
         const size = data['size'] ? data['size'] : '';

         div.innerHTML = `
            <div id="${countRows}" class="card-input d-flex justify-content-between">
               <div id="photoInputs-${countRows}" class="order-card ms-3" style="min-width: 135px;" data-count="0">
                  <div></div>
                  <div id="filesGroup" class="mt-2 row" style="margin-top: 7.8px!important;">
                     <p class="numeration" ${countRows >= 9 ? 'style="width: 43px;"' : ""}>${countRows}</p>
                     <div class="input-group col-3">
                        <input id="file-input-${countRows}-0" type="file" name="${countRows}" class="m-0 files-input"  onchange="getImageUrl(event)">
                        <div class="file-label-wrapper w-100">
                           <label class="file-label" data-row="${countRows}" data-url="${Photo[0] ? Photo[0] : ''}">Загрузите фото товара</label>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="urlPhotoInputs-${countRows}" class="order-card" style="min-width: 145px;">
                  <div id="UrlPhotoGroup" class="mt-2 row">
                     <div>
                        <input type="text" name="ImageUrl" class="m-0 urlPhotos-input text-order-input" placeholder="Вставьте ссылку на фото" value="${PhotoUrl[0] ? PhotoUrl[0] : ''}">
                     </div>
                  </div>
               </div>
               <div id="urlProductInputs-${countRows}" class="order-card" style="min-width: 150px;">
                  <div id="UrlProductGroup" class="mt-2 row">
                     <div class="position-relative">
                        <input type="text" name="url" class="m-0 urlProduct-input text-order-input" placeholder="Вставьте ссылку на товар" value="${ProductUrl[0] ? ProductUrl[0] : ''}">
                        <span id="plusGreen-${countRows}" class="plus-green-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Добавить такой же товар, но другого продавца"><i class="fas fa-plus"></i></span>
                     </div>
                  </div>
               </div>
               <div class="order-card ms-3" style="min-width: 120px;">
                  <div class="mt-2 row">
                     <div>
                        <input type="number" name="count" class="m-0 text-order-input" value="${count}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 105px;">
                  <div class="mt-2 row">
                     <div>
                        <input type="number" name="cost" step="any" class="m-0 text-order-input" value="${cost}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 95px;">
                  <div class="mt-2 row">
                     <div>
                        <input type="text" name="color" class="m-0 text-order-input" value="${color}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 105px;">
                  <div class="mt-2 row">
                     <div>
                        <input type="text" name="size" class="m-0 text-order-input" value="${size}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 135px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <input type="text" name="model" class="m-0 text-order-input" value="${model}">
                        <span id="plusBlue-${countRows}" class="plus-blue-btn"><i class="fas fa-plus"></i></span>
                        <span id="minusRed-${countRows}" class="minus-red-btn"><i class="fas fa-minus"></i></span>
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 44px;">
                  <div class="space"></div>
               </div>
            </div>
         `
         let countOfPhotos,
             countOfUrls,
             countOfProducts;

         const getCount = (length, total) => {
            if (length > 1) {
               total = length - 1;
            } else {
               total = 0;
            }
            return total;
         }
         
         countOfPhotos = getCount(Photo.length, countOfPhotos);
         countOfUrls = getCount(PhotoUrl.length, countOfUrls);
         countOfProducts = getCount(ProductUrl.length, countOfProducts);
         
         const countOfGreenRows = Math.max(countOfPhotos, countOfUrls, countOfProducts);

         return {div, countOfGreenRows};
      }

      const bluePlusBtn = document.querySelector('#plusBlue-0');
      const blueBtnHandler = (data) => {
         const formWrapper = document.querySelector('.form-wrapper');

         countOfMainInputs++;
         const countOfRows = countOfMainInputs;

         let row,
             countOfGreen
         if (data) {
            const {div, countOfGreenRows} = rowInnerHtml(countOfRows, data);
            row = div;
            countOfGreen = countOfGreenRows;
         } else {
            const {div} = rowInnerHtml(countOfRows);
            row = div;
         }
         formWrapper.append(row);

         const getSmallInputsData = (i) => {
            return {
               photo : data['Photo'][i] ? data['Photo'][i] : '',
               photoUrl : data['PhotoUrl'][i] ? data['PhotoUrl'][i] : '',
               productUrl : data['ProductUrl'][i] ? data['ProductUrl'][i] : '',
            }
         }

         for (let i = 0; i < countOfGreen; i++) {
            const data = getSmallInputsData(i)
            greenBtnHandler(countOfRows, data);
         }
         
         const greenPlusBtn = document.querySelector(`#plusGreen-${countOfRows}`),
               bluePlusBtn = document.querySelector(`#plusBlue-${countOfRows}`),
               redMinusBtn = document.querySelector(`#minusRed-${countOfRows}`);

         const defaultData = {
            photo : '',
            photoUrl : '',
            productUrl : '',
         }
         greenPlusBtn.addEventListener('click', () => greenBtnHandler(countOfRows, defaultData));
         bluePlusBtn.addEventListener('click', blueBtnHandler);
         redMinusBtn.addEventListener('click', () => {
            div.remove();
         });
      }

      function openModal() {
         myModal.show()
      }

      setTimeout(() => {
         const imgLabels = document.querySelectorAll('[data-url]');

         imgLabels.forEach(label => {
            label.addEventListener('click', () => openModalWithImg(label.dataset.url, label.dataset.row));
         })
         //Вставляем в тег дефолт картинку
         function pasteNoImage(imgTag) {
            imgTag.src = '{{asset('assets/images/no-image.png')}}';
         }
         //Вставляем в тег картинку по url
         function changeModalImg(imgTag, url) {
            imgTag.addEventListener('error', () => pasteNoImage(imgTag));
            imgTag.src = url;
         }
         //Открываем модалку с переданной картинкой
         function openModalWithImg(url, id) {
            const imgTag = document.querySelector('.image img');

            if (!url) {
               pasteNoImage(imgTag);
               openModal();
               setAttributeBySelector('#file1', 'name', id);
               return;
            }
            changeModalImg(imgTag, url);
            openModal();
            setAttributeBySelector('#file1', 'name', id);
         }

      }, (600));

      data.forEach((row, i) => {
         blueBtnHandler(row);
         if (data[i].Photo) {
            photosUrl[i] = data[i].Photo;
         }
      })
   })
   async function getImageUrl(e) {
      const file = e.target.files[0];
      const _token = document.querySelector('[name="_token"]').value;
      const formData = new FormData();
      formData.append('image', file);
      formData.append('_token', _token);
      const res = await postFormData('{{Route("UploadOrderPhoto")}}', formData);
      const id = e.target.getAttribute('name');
      if (photosUrl[id]) {
         photosUrl[id] = [...photosUrl[id], res.url];
      } else {
         photosUrl[id] = [res.url];
      }
      console.log('Успешно создан: ', JSON.stringify(res));
      e.target.nextElementSibling.style.backgroundColor = '#ecffc6';
   }
   

   async function getData(id) {
      const body = { order_id: id };
      return await postData("{{Route('SelectOrder')}}", body);
   }

   async function makeOrder() {
      const dataToServer = {id: _page_id, json: []};

      for (let i = 1; i <= countOfMainInputs; i++) {
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
         if (photosUrl[i]) {
            photosUrl[i].forEach(url => {
            photos.push(url);
         })
         }
         
         makeData(urlPhotoInputs, urlPhotos, 'PhotoUrl');
         makeData(urlProductInputs, urlProducts, 'ProductUrl');
         data['Photo'] = photos;
         data['count'] = parseInt(count);
         data['cost'] = parseFloat(cost);
         data['color'] = color;
         data['size'] = size;
         data['model'] = model;
         dataToServer['json'].push(data);
      }
      postData('{{Route("ReplaceOrder")}}', dataToServer)
            .then(res => {
               if (res.status === true) {
                  console.log('Успешно создан: ', JSON.stringify(res));
                  window.location.href = '{{Route("page", ["page" => "orders"])}}'
               }
            });
   }
   
</script>