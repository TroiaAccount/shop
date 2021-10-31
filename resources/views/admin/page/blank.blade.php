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
      <div class="order__footer"></div>
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
                                 <div class="widget-body clearfix">
                                       <h5 class="box-title mr-b-0">Dropzone</h5>
                                       <p class="text-muted">For multiple file upload</p>
                                       <form action="#" data-toggle="dropzone">
                                          <div class="fallback">
                                             <input type="file" name="file" id="file1" multiple="multiple">
                                          </div>
                                          <!-- /.fallback -->
                                          <div class="dz-message" data-dz-message><span>Drop files here to upload</span>
                                          </div>
                                       </form>
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
   window.addEventListener('DOMContentLoaded', async () => {
      const href = window.location.href.split('/'),
            id = href[href.length - 1];
            
      let data = await getData(id);
      data = await JSON.parse(data.data);  
      console.log(data);

      const container = document.querySelector('.order__header');

      data.forEach((product, i) => {
         console.log(product, i);
         const row = document.createElement('div');
         row.classList.add('widget-list', 'row');
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
                                 <a class="btn btn-primary w-100" data-url="${product.Photo[0] ? product.Photo[0] : ''}">Посмотреть</a>
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
                                    <input class="url-input bg-info" type="text" value="${product.PhotoUrl[0] ? product.PhotoUrl[0] : ''}"> 
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
                                    <input class="url-input bg-success text-dark" type="text" value="${product.ProductUrl[0] ? product.ProductUrl[0] : ''}"> 
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
                                 <div class="rounded-card bg-primary">
                                    <p class="text-muted fw-600 m-0">${product.count ? product.count : ''}</p>
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
                              <div class="rounded-card bg-primary">
                                 <p class="text-muted fw-600 m-0">${product.cost ? product.cost : ''}</p>
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
                              <div class="rounded-card bg-success">
                                 <p class="text-muted fw-600 m-0">${product.color ? product.color : ''}</p>
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
                              <div class="rounded-card bg-info">
                                 <p class="text-muted fw-600 m-0">${product.size ? product.size : ''}</p>
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
                              <div class="rounded-card bg-primary">
                                 <p class="text-muted fw-600 m-0">${product.model ? product.model : ''}</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         `;

         container.append(row);

         const addWidget = (array, selector, color, textClass) => {
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
                                    <input class="url-input bg-${color} ${textClass}" style="font-size: 13px" type="text" value="${array[j] ? array[j] : ''}"> 
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

         addWidget(product.PhotoUrl, 'photoUrl', 'info', '');
         addWidget(product.ProductUrl, 'productUrl', 'success', 'text-dark');

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
                           <a class="btn btn-primary w-75" style="font-size: 13px; padding: 5px 8px;" data-url="${product.Photo[j]}">Посмотреть</a>
                        </div>
                     </div>
                  </div>
               `
               photoWrapper.append(widget);
            }
         }

      })

      const inputs = document.querySelectorAll('input');
      inputs.forEach(input => {
         input.addEventListener('click', () => input.select())
      })
   })

   async function getData(id) {
      const body = { order_id: id };
      return await postData('http://taobao:8080/admin/order/select', body);
   }

   function checkImage() {
      openModal();
   }
</script>