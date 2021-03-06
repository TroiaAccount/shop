<form id="CreateOrder" enctype="multipart/form-data">
   @csrf
   <div class="d-flex">
      <div class="form-wrapper container ps-0 ps-2" style="background: #FFCCCC;">
         <div id="0" class="card-input d-flex justify-content-between ms-1">
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
         </div>
      </div>
      <div class="form-wrapper container ps-0" style="background: #CCFFCC; min-width: 1499px">
         <div id="0" class="card-input d-flex justify-content-between">
            <div class="order-card ms-3" style="min-width: 135px;" data-count="0">
               <div class="label-card">
                  <label class="order-title">Кол-во шт. наличие:</label>
               </div>
            </div>
            <div class="order-card" style="min-width: 105px;">
               <div class="label-card">
                  <label for="ImageUrl-1" class="order-title">Цена факт:</label>
               </div>
            </div>
            <div id="urlProductInputs-0" class="order-card" style="min-width: 120px;">
               <div class="label-card">
                  <label for="ImageUrl-1" class="order-title">Комиссия %:</label>
               </div>
            </div>
            <div class="order-card" style="min-width: 120px;">
               <div class="label-card">
                  <label for="count" class="order-title">Доставка по Китаю:</label>
               </div>
            </div>
            <div class="order-card" style="min-width: 95px;">
               <div class="label-card">
                  <label for="cost" class="order-title">Сумма:</label>
               </div>
            </div>
            <div class="order-card" style="min-width: 95px;">
               <div class="label-card">
                  <label for="color" class="order-title">Общий вес:</label>
               </div>
            </div>
            <div class="order-card" style="min-width: 105px;">
               <div class="label-card">
                  <label for="size" class="order-title">Общий обьём:</label>
               </div>
            </div>
            <div class="order-card" style="min-width: 135px;">
               <div class="label-card">
                  <label for="model" class="order-title">Примечание:</label>
               </div>
            </div>
            <div class="order-card" style="min-width: 95px;">
               <div class="label-card">
                  <label for="model" class="order-title">Статус:</label>
               </div>
            </div>
            <div class="order-card" style="min-width: 135px;">
               <div class="label-card">
                  <label for="model" class="order-title">Дата выкупа:</label>
               </div>
            </div>
            <div class="order-card" style="min-width: 149px;">
               <div class="label-card">
                  <label for="model" class="order-title">Дата прихода на склад в Китае:</label>
               </div>
            </div>
         </div>
      </div>
      <div class="form-wrapper container ps-0" style="background: #CCCCFF; min-width:516px">
         <div id="0" class="card-input d-flex justify-content-start">
            <div class="order-card ms-3" style="min-width: 145px;" data-count="0">
               <div class="label-card">
                  <label class="order-title">Фото с фабрики:</label>
               </div>
            </div>
            <div class="order-card" style="min-width: 105px;">
               <div class="label-card">
                  <label for="ImageUrl-1" class="order-title">Фотоотчет:</label>
               </div>
            </div>
            <div class="order-card" style="min-width: 125px; margin-left: 38px;">
               <div class="label-card">
                  <label for="ImageUrl-1" class="order-title">Примечание:</label>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="mt-4 submitBtn d-flex">
      <div class="d-flex me-3 align-items-center">
         <p class="me-2">Сумма заказа:</p>
         <input id="sumOrderInput" type="text" value="" readonly class="m-0 text-order-input">
      </div>
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
         <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="resetLabelColor()">Сохранить</button>
       </div>
     </div>
   </div>
 </div>

<script>
   const href = window.location.href.split('/'),
         _page_id = href[href.length - 1],
         commission = 0.05,
         COURSE = parseFloat('{{$course->user_cost}}') ? parseFloat('{{$course->user_cost}}') : 0;

   let activeBtn,
      countOfMainInputs = 0,
      checkedItems = {},
      infoState = {},
      orderSum = 0;

   window.addEventListener('DOMContentLoaded', async () => {
      var myModal = new bootstrap.Modal(document.getElementById('myModal'))

      document.querySelector('#CreateOrder').addEventListener('submit', (e) => {
         e.preventDefault();
         makeOrder();
      })

      let data = await getData(_page_id);
      data = await JSON.parse(data.data);  

      const greenPlusBtn = document.querySelector('.plus-green-btn');

      const greenBtnHandler = (id, data, closed) => {
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

         if (!closed) {
            closed = ['undefined'];
         }

         file.innerHTML = `
            <div id="filesGroup" class="mt-2 rowms-2" style="margin-top: 7.8px!important;">
                  <p class="subnumeration ms-2" style="${style}">${id}.${count}</p>
                  <div class="input-group col-3 p-0">
                     <input id="file-input-${id}-${count}" type="file" name="${id}" class="m-0 files-input" onchange="getImageUrl(event)">
                     <div class="file-label-wrapper ms-4">
                        <label class="file-label-mini ${closed[count] === 'true' ? 'redline' : ''}" data-row="${id}" data-url="${data.photo}" data-redact="true" data-state="photosUrl">Загрузите фото товара</label>
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
         const availability = data['availability'] ? data['availability'] : '';
         const priceFact = data['priceFact'] ? data['priceFact'] : '';
         const chinaDelivery = data['chinaDelivery'] ? data['chinaDelivery'] : '';
         const weight = data['weight'] ? data['weight'] : '';
         const volume = data['volume'] ? data['volume'] : '';
         const note = data['note'] ? data['note'] : '';
         const status = data['status'] ? data['status'] : '';
         const buyoutDate = data['buyoutDate'] ? data['buyoutDate'] : '';
         const chinaDate = data['chinaDate'] ? data['chinaDate'] : '';
         const PhotoFactory = data['PhotoFactory'] ? data['PhotoFactory'] : '';
         const PhotoReport = data['PhotoReport'] ? data['PhotoReport'] : '';
         const checkedItem = data['checkedItem'];
         const info = data['info'];
         let sum = 0;
         if (availability && priceFact && chinaDelivery) {
            const productComission = parseFloat(availability) * parseFloat(priceFact) * commission;
            sum = (( ( parseFloat(availability) * parseFloat(priceFact) + productComission ) + parseFloat(chinaDelivery) ) * COURSE ).toFixed(2);
         }

         orderSum += parseFloat(sum);

         if (info) {
            infoState[countRows] = info;
         } else {
            infoState[countRows] = '';
         }

         if (checkedItem === undefined) {
            checkedItems[countRows] = 'undefined';
         } else {
            checkedItems[countRows] = checkedItem;
         }
         let closed,
            closedLength;
         if (data.PhotoUrl && data.ProductUrl) {
            closedLength = data.PhotoUrl.length > data.ProductUrl.length 
               ? data.PhotoUrl.length 
               : data.ProductUrl.length;
            closed = new Array(closedLength).fill('true');
            if (data.checkedItem === 'undefined') {
               closed = closed.map(item => item = 'undefined');
            } else if (data.checkedItem !== 'false') {
               closed[data.checkedItem] = 'false';
            }
         } else {
            closed = new Array(closedLength).fill('undefined');
         }

         div.innerHTML = `
            <div id="${countRows}" class="card-input d-flex justify-content-between ms-1">
               <div id="photoInputs-${countRows}" class="order-card ms-3" style="min-width: 135px;" data-count="0">
                  <div></div>
                  <div id="filesGroup" class="mt-2 row" style="margin-top: 7.8px!important;">
                     <p class="numeration" ${countRows >= 9 ? 'style="width: 43px;"' : ""}>${countRows}</p>
                     <div class="input-group col-3">
                        <input id="file-input-${countRows}-0" type="file" name="${countRows}" class="m-0 files-input">
                        <div class="file-label-wrapper w-100">
                           <label class="file-label ${closed[0] === 'true' ? 'redline' : ''}" data-row="${countRows}" data-url="${Photo[0] ? Photo[0] : ''}" data-redact="true" data-state="photosUrl">Загрузите фото товара</label>
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
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 135px; margin-left: 20px">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <input type="text" readonly name="availability" class="m-0 text-order-input" value="${availability}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 105px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <input type="text" readonly name="priceFact" class="m-0 text-order-input" value="${priceFact}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 120px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <input type="text" readonly name="commission" class="m-0 text-order-input" value="${commission * 100}%">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 120px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <input type="text" readonly name="chinaDelivery" class="m-0 text-order-input" value="${chinaDelivery}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 95px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <input type="text" readonly name="sum" class="m-0 text-order-input" readonly value="${sum}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 95px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <input type="text" readonly name="weight" class="m-0 text-order-input" value="${weight}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 105px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <input type="text" readonly name="volume" class="m-0 text-order-input" value="${volume}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 135px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <input type="text" readonly name="note" class="m-0 text-order-input" value="${note}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 95px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <input type="text" readonly name="status" class="m-0 text-order-input" value="${status}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 135px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <input type="text" readonly name="buyoutDate" class="m-0 text-order-input" value="${buyoutDate}">
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 149px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <input type="text" readonly name="chinaDate" class="m-0 text-order-input" value="${chinaDate}">
                     </div>
                  </div>
               </div>
               <div class="order-card ms-3" style="min-width: 145px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <div class="input-group col-3">
                           <input id="file-input-${countRows}-0" type="file" name="${countRows}" class="m-0 files-input">
                           <div class="file-label-wrapper w-100">
                              <label class="file-label" data-row="${countRows}" data-url="${PhotoFactory[0] ? PhotoFactory[0] : ''}" data-redact="false" data-state="photosFactory">Посмотреть</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 105px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <div class="input-group col-3">
                           <input id="file-input-${countRows}-0" type="file" name="${countRows}" class="m-0 files-input">
                           <div class="file-label-wrapper w-100">
                              <label class="file-label" data-row="${countRows}" data-url="${PhotoReport[0] ? PhotoReport[0] : ''}" data-redact="false" data-state="photosReport">Посмотреть</label>
                           </div>
                        </div>
                        <span id="plusBlue-${countRows}" class="plus-blue-btn"><i class="fas fa-plus"></i></span>
                        <span id="minusRed-${countRows}" class="minus-red-btn"><i class="fas fa-minus"></i></span>
                     </div>
                  </div>
               </div>
               <div class="order-card" style="min-width: 105px;margin-left: 96px;">
                  <div class="mt-2 row">
                     <div class="position-relative me-2">
                        <i onclick="checkWarning(event)" class="fas fa-exclamation ${info ? 'text-purple' : ''}" aria-hidden="true" data-row="${countRows}"></i>
                     </div>
                  </div>
               </div>
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
         return {div, countOfGreenRows, closed};
      }

      const bluePlusBtn = document.querySelector('#plusBlue-0');
      const blueBtnHandler = (data) => {
         const formWrapper = document.querySelector('.form-wrapper');

         countOfMainInputs++;
         const countOfRows = countOfMainInputs;

         let row,
            countOfGreen,
            closedGreen;
         if (data) {
            const {div, countOfGreenRows, closed} = rowInnerHtml(countOfRows, data);
            row = div;
            countOfGreen = countOfGreenRows;
            closedGreen = closed;
         } else {
            const {div} = rowInnerHtml(countOfRows);
            row = div;
         }
         formWrapper.append(row);

         const getSmallInputsData = (i) => {
            i = i + 1;
            return {
               photo : data['Photo'][i] ? data['Photo'][i] : '',
               photoUrl : data['PhotoUrl'][i] ? data['PhotoUrl'][i] : '',
               productUrl : data['ProductUrl'][i] ? data['ProductUrl'][i] : '',
            }
         }

         for (let i = 0; i < countOfGreen; i++) {
            const data = getSmallInputsData(i)
            greenBtnHandler(countOfRows, data, closedGreen);
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
            row.remove();
            countOfMainInputs--;
         });
      }

      function openModal(redact) {
         const label = document.querySelector('.customInputLabel');
         if (redact) {
            label.classList.remove('hide')
         } else {
            label.classList.add('hide')
         }
         myModal.show()
      }

      setTimeout(() => {
         const imgLabels = document.querySelectorAll('[data-url]');

         imgLabels.forEach(label => {
            label.addEventListener('click', () => openModalWithImg(label, label.dataset.url, label.dataset.row, label.dataset.redact));
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
         function openModalWithImg(btn, url, id, redact) {
            const imgTag = document.querySelector('.image img');
            activeBtn = btn;
            if (!url) {
               pasteNoImage(imgTag);
               if (redact === 'true') {
                     openModal(true);
                  } else {
                     openModal(false);
                  }
               setAttributeBySelector('#file1', 'name', id);
               return;
            }
            changeModalImg(imgTag, url);
            if (redact === 'true') {
               openModal(true);
            } else {
               openModal(false);
            }
            setAttributeBySelector('#file1', 'name', id);
         }

      }, (600));

      data.forEach((row, i) => {
         blueBtnHandler(row);
      })

      document.querySelector('#sumOrderInput').value = orderSum;
   })

   function getPhotosFromInputSelector(selector) {
      const photos = {};
      const inputs = document.querySelectorAll(`[data-state="${selector}"]`);
      if (!inputs) return;
      inputs.forEach(input => {
         const data = input.dataset;
         if (!data.url) return;
         if (photos[data.row]) {
            photos[data.row] = [...photos[data.row], data.url];
         } else {
            photos[data.row] = [data.url];
         }
      })
      return photos;
   }

   function checkWarning(e) {
      if (e.target.classList.contains('text-purple')) {
         const confirmed = confirm(infoState[e.target.dataset.row] + '\nНажмите "ОК" для подтверждения\nНажмите "Отмена" для отклонения позиции');
         if (!confirmed) {
            checkedItems[e.target.dataset.row] = 'false';
            infoState[e.target.dataset.row] = '';
            e.target.classList.remove('text-purple');
         }
         console.log(checkedItems);
      }
   }

   async function getImageUrl(e) {
      const file = e.target.files[0];
      const _token = document.querySelector('[name="_token"]').value;
      const formData = new FormData();
      formData.append('image', file);
      formData.append('_token', _token);
      const res = await postFormData('{{Route("UploadOrderPhoto")}}', formData);
      activeBtn.dataset.url = res.url;
      console.log('Успешно создан: ', JSON.stringify(res));
      e.target.nextElementSibling.style.backgroundColor = '#ecffc6';
      e.target.value = '';
   }
   

   async function getData(id) {
      const body = { order_id: id };
      return await postData("{{Route('SelectOrder')}}", body);
   }

   function resetLabelColor() {
      const label = document.querySelector('.customInputLabel');
      label.style.background = 'none';
   }

   async function makeOrder() {
      showLoader();
      const dataToServer = {id: _page_id, json: []},
            photosUrl = getPhotosFromInputSelector('photosUrl'),
            photosFactory = getPhotosFromInputSelector('photosFactory'),
            photosReport = getPhotosFromInputSelector('photosReport');

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
               model = mainInput.querySelector('[name="model"]').value,
               availability = mainInput.querySelector('[name="availability"]').value,
               priceFact = mainInput.querySelector('[name="priceFact"]').value,
               chinaDelivery = mainInput.querySelector('[name="chinaDelivery"]').value,
               weight = mainInput.querySelector('[name="weight"]').value,
               volume = mainInput.querySelector('[name="volume"]').value,
               note = mainInput.querySelector('[name="note"]').value,
               status = mainInput.querySelector('[name="status"]').value,
               buyoutDate = mainInput.querySelector('[name="buyoutDate"]').value,
               chinaDate = mainInput.querySelector('[name="chinaDate"]').value;

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

         data['availability'] = availability;
         data['priceFact'] = priceFact;
         data['chinaDelivery'] = chinaDelivery;
         data['weight'] = weight;
         data['volume'] = volume;
         data['note'] = note;
         data['status'] = status;
         data['buyoutDate'] = buyoutDate;
         data['chinaDate'] = chinaDate;
         data['checkedItem'] = checkedItems[i];
         data['info'] = infoState[i];
         data['lastChange'] = `${ new Date().toLocaleDateString() } / ${ new Date().toLocaleTimeString() }`;
         dataToServer['json'].push(data);
      }
      postData('{{Route("ReplaceOrder")}}', dataToServer)
            .then(res => {
               hideLoader();
               if (res.status === true) {
                  console.log('Успешно создан: ', JSON.stringify(res));
                  window.location.href = '{{Route("page", ["page" => "orders"])}}'
               }
            });
   }
   
</script>