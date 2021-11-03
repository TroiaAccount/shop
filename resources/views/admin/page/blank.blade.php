<section class="page__order order main-wrapper clerfix">
   <div class="order__wrapper d-flex flex-column">
      <div class="order__header container-fluid pt-3">
         <div class="widget-list row">
            <div class="widget-holder widget-sm col" style="max-width: 65px;">
               <div class="widget-bg bg-transparent text-inverse number mb-2" style="height: 70px;">
                  <div class="widget-body p-0" style="height: 70px;">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600"></p><span class="-title d-block"><span class=""></span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-primary text-inverse mb-2">
                     <div class="widget-body">
                        <div class="-w-info media">
                           <div class="media-body w-50">
                              <p class="text-muted mr-b-5 fw-600">Фото товара</p><span class="-title d-block"><span class=""></span></span>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-info text-inverse mb-2">
                     <div class="widget-body">
                        <div class="-w-info media">
                           <div class="media-body w-50">
                              <p class="text-muted mr-b-5 fw-600">Ссылка на фото</p><span class="-title d-block"><span class=""></span></span>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-success mb-2">
                     <div class="widget-body">
                        <div class="-w-info media">
                           <div class="media-body w-50">
                              <p class="text-muted mr-b-5 fw-600">Ссылка на товар</p><span class="-title d-block"><span class=""></span></span>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
            
            <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-primary mb-2">
                     <div class="widget-body text-inverse">
                        <div class="-w-info media">
                           <div class="media-body w-50">
                              <p class="text-muted mr-b-5 fw-600">Кол-во штук</p><span class="-title d-block"><span class=""></span></span>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-primary mb-2">
                  <div class="widget-body bg-primary text-inverse">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Цена</p><span class="-title d-block"><span class=""></span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-success mb-2">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Цвет</p><span class="-title d-block"><span class=""></span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-info text-inverse mb-2">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Размер</p><span class="-title d-block"><span class=""></span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-primary text-inverse mb-2">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Модель</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="order__body container-fluid"></div>
      <div class="order__footer pt-3">
         <div class="container-fluid">
            <div class="row page-title clearfix justify-content-end">
               <div>
                  <a onclick="makeOrder()" class="btn btn-block btn-outline-success btn-rounded ripple hovered-btn dark">Сохранить</a>
               </div>
            </div>
         </div>
      </div>
</section>

<div class="modal modal-info fade bs-modal-md-info" tabindex="-1" role="dialog"
   aria-labelledby="myMediumModalLabel2" aria-hidden="true" style="display: none">
   <div class="modal-dialog modal-md">
      <div class="modal-content">
            <div class="modal-header text-inverse">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
               <h5 class="modal-title" id="myMediumModalLabel2"></h5>
            </div>
            <div class="modal-body">
               <div class="d-flex flex-column modal-content-wrapper">
                  <div class="image">
                     <img src="{{asset('assets/admin/assets/img/no-image.png')}}" alt="">
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
               <button type="button" class="btn btn-danger btn-rounded ripple text-left"
                  data-dismiss="modal">Закрыть</button>
            </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>

<script>
   const href = window.location.href.split('/'),
         _page_id = href[href.length - 1];

   window.addEventListener('DOMContentLoaded', async () => {
      let data = await getData(_page_id);
      data = await JSON.parse(data.data);  
      console.log(data);

      const container = document.querySelector('.order__header');

      data.forEach((product, i) => {
         console.log(product, i);
         const row = document.createElement('div');
         row.classList.add('widget-list', 'row', 'orderRow');
         row.innerHTML = `
               <div class="widget-holder widget-sm col" style="max-width: 65px;">
                  <div class="widget-bg bg-transparent text-inverse number mb-2">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-50">
                              <p class="text-muted mr-b-5 fw-600"></p><span class="-title d-block"><span class=""></span></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="widget-bg bg-transparent text-inverse mt-2">
                     <div class="widget-body p-0">
                        <div class="-w-info media number">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-light">
                                 <p class="text-dark fw-600 m-0">${i + 1}</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col" name="photo-${i + 1}">
                     <div class="widget-bg bg-transparent text-inverse mt-2">
                        <div class="widget-body p-0">
                           <div class="-w-info media">
                              <div class="media-body w-100">
                                 <a class="btn btn-primary w-100" data-row="${i}" data-url="${product.Photo[0] ? product.Photo[0] : ''}">Посмотреть</a>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="widget-holder widget-sm col" name="photoUrl-${i + 1}">
                     <div class="widget-bg bg-transparent text-inverse mt-2">
                        <div class="widget-body p-0">
                           <div class="-w-info media">
                              <div class="media-body w-100">
                                 <div class="rounded-card bg-info d-flex flex-column justify-content-between url-input-wrapper">
                                    <input class="url-input bg-info" type="text" name="imageUrl" value="${product.PhotoUrl[0] ? product.PhotoUrl[0] : ''}"> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="widget-holder widget-sm col" name="productUrl-${i + 1}">
                     <div class="widget-bg bg-transparent text-inverse mt-2">
                        <div class="widget-body p-0">
                           <div class="-w-info media">
                              <div class="media-body w-100">
                                 <div class="rounded-card bg-success d-flex flex-column justify-content-between url-input-wrapper">
                                    <input class="url-input bg-success text-dark" type="text" name="url" value="${product.ProductUrl[0] ? product.ProductUrl[0] : ''}"> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="widget-holder widget-sm col">
                     <div class="widget-bg bg-transparent text-inverse mt-2">
                        <div class="widget-body p-0">
                           <div class="-w-info media">
                              <div class="media-body w-100">
                                 <div class="rounded-card bg-primary d-flex flex-column justify-content-between">
                                    <input class="url-input bg-primary text-muted text-center" type="text" name="count" value="${product.count ? product.count : ''}"> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse mt-2">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-primary d-flex flex-column justify-content-between">
                                 <input class="url-input bg-primary text-muted text-center" type="text" name="cost" value="${product.cost ? product.cost : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse mt-2">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-success d-flex flex-column justify-content-between">
                                 <input class="url-input bg-success text-muted text-center" type="text" name="color" value="${product.color ? product.color : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse mt-2">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-info d-flex flex-column justify-content-between">
                                 <input class="url-input bg-info text-muted text-center" type="text" name="size" value="${product.size ? product.size : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse mt-2">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-primary d-flex flex-column justify-content-between">
                                 <input class="url-input bg-primary text-muted text-center" type="text" name="model" value="${product.model ? product.model : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         `;

         container.append(row);

         const addWidget = (array, selector, color, textClass, name) => {
            if (array.length > 1) {
               const photoWrapper = document.querySelector(`[name="${selector}-${i + 1}"]`);
               for (let j = 1; j < array.length; j++) {
                  const widget = document.createElement('div');
                  widget.classList.add('widget-bg', 'bg-transparent', 'text-inverse', 'mt-2');
                  widget.innerHTML = `
                     <div class="widget-bg bg-transparent text-inverse mt-2 w-75">
                        <div class="widget-body p-0">
                           <div class="-w-info media">
                              <div class="media-body w-100 d-flex">
                                 <div class="rounded-card bg-${color} d-flex flex-column justify-content-between url-input-wrapper text-right" style="padding: 4px 0.75rem;">
                                    <input class="url-input bg-${color} ${textClass}" name="${name}" style="font-size: 13px" type="text" value="${array[j] ? array[j] : ''}"> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  `
                  photoWrapper.append(widget);
               }
            }
         }

         addWidget(product.PhotoUrl, 'photoUrl', 'info', '', 'imageUrl');
         addWidget(product.ProductUrl, 'productUrl', 'success', 'text-dark', 'url');

         if (product.Photo.length > 1) {
            const photoWrapper = document.querySelector(`[name="photo-${i + 1}"]`);
            for (let j = 1; j < product.Photo.length; j++) {
               const widget = document.createElement('div');
               widget.classList.add('widget-bg', 'bg-transparent', 'text-inverse', 'mt-2');
               widget.innerHTML = `
                  <div class="widget-body p-0">
                     <div class="-w-info media">
                        <div class="media-body w-100 text-right position-relative">
                           <div class="rounded-card bg-light numeration position-absolute subnumeration">
                              <p class="text-dark fw-600 m-0">${i + 1}.${j}</p>
                           </div>
                           <a class="btn btn-primary w-75" style="font-size: 13px; padding: 5px 8px;" data-row="${i}" data-url="${product.Photo[j]}">Посмотреть</a>
                        </div>
                     </div>
                  </div>
               `
               photoWrapper.append(widget);
            }
         }

      })
      //При клике на инпут выделяется текст   
      const inputs = document.querySelectorAll('input');
      inputs.forEach(input => {
         input.addEventListener('click', () => input.select())
      })

      //Кнопки посмотреть фото
      const imgButtons = document.querySelectorAll('[data-url]');

      imgButtons.forEach(btn => {
         btn.addEventListener('click', () => openModalWithImg(btn.dataset.url, btn.dataset.row));
      })
   })
//Получаем информацию о заказе
   async function getData(id) {
      const body = { order_id: id };
      return await postData("{{Route('read_orders_SelectOrder')}}", body);
   }
//Вставляем в тег дефолт картинку
   function pasteNoImage(imgTag) {
      imgTag.src = '{{asset('assets/admin/assets/img/no-image.png')}}';
   }
//Вставляем в тег картинку по url
   function changeModalImg(imgTag, url) {
      imgTag.addEventListener('error', () => pasteNoImage(imgTag));
      imgTag.src = url;
   }
//Открываем модалку с переданной картинкой
   function openModalWithImg(url, id) {
      console.log(url);
      if (!url) {
         openModal();
         setAttributeBySelector('#file1', 'name', id);
         return;
      }
      const imgTag = document.querySelector('.image img');
      changeModalImg(imgTag, url);
      openModal();
      setAttributeBySelector('#file1', 'name', id);
   }
   
//Постим на сервер загруженную картинку и получаем ее url
   const photosUrl = {};

   async function getImageUrl(e) {
      file = e.target.files[0];
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
//Собираем заказ и отправляем на сервер
   function makeOrder() {
      const orderRows = document.querySelectorAll('.orderRow'),
            dataToServer = {id: _page_id, json: []};

      orderRows.forEach((order, i) => {
         const data = {},
               photos = [],
               urlPhotos = [],
               urlProducts = [],
               urlPhotoInputs = order.querySelectorAll('[name="imageUrl"]'),
               urlProductInputs = order.querySelectorAll('[name="url"]'),
               count = order.querySelector('[name="count"]').value,
               cost = order.querySelector('[name="cost"]').value,
               color = order.querySelector('[name="color"]').value,
               size = order.querySelector('[name="size"]').value,
               model = order.querySelector('[name="model"]').value;

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
         data['cost'] = parseInt(cost);
         data['color'] = color;
         data['size'] = size;
         data['model'] = model;
         dataToServer['json'].push(data);
      })

      postData('{{Route("ReplaceOrder")}}', dataToServer)
            .then(res => {
               if (res.status === true) {
                  console.log('Успешно создан: ', JSON.stringify(res));
                  //window.location.href = '{{Route("page", ["page" => "orders"])}}'
               }
            });
   }
</script>