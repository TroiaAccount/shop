<section class="page__order order main-wrapper clerfix pl-0">
   <div class="order__wrapper d-flex flex-column">
      <div id="client-info" class="widget-list row mt-4">
         <div class="col d-flex justify-content-start" style="max-width: 150px;">
            <div class="col">
               <p>Сумма:</p>
            </div>
            <div class="col p-0">
               <p class="text-success status-number">{{$table->sum}}</p>
            </div>
         </div>
         <div class="col d-flex p-0" style="max-width: 320px;">
            <div class="col" style="max-width: 80px">
               <p>Статус:</p>
            </div>
            <div class="col p-0" style="margin-top: -5px;">
               <select id="orderStatus" class="m-b-10 form-control" data-placeholder="Choose" data-toggle="select">
                  <optgroup label="Статус">
                  @for ($i = 1; $i <= 4; $i++)
                     <option value="{{ $i }}" @if ($table->status == $i) selected @endif>
                        @if ($i == 1) Отправлен 
                        @elseif ($i == 2) Прибыл 
                        @elseif ($i == 3) Упаковывается 
                        @elseif ($i == 4) Обрабатывается 
                        @endif
                     </option>
                  @endfor
                  </optgroup>
               </select>
            </div>
         </div>
         <div class="col d-flex ml-3" style="max-width: 150px;">
            <div class="col">
               <p>Баланс:</p>
            </div>
            <div class="col p-0">
               <p class="text-danger status-number">{{$table->user_info->balance}}</p>
            </div>
         </div>
         <div class="col d-flex ml-3" style="max-width: 300px;">
            <div class="col">
               <p>Номер телефона:</p>
            </div>
            <div class="col p-0">
               <p>{{$table->user_info->login}}</p>
            </div>
         </div>
         <div class="col d-flex ml-3" style="max-width: 300px;">
            <div class="col">
               <p>Имя клиента:</p>
            </div>
            <div class="col p-0">
               <p>{{$table->user_info->full_name}}</p>
            </div>
         </div>
      </div>
      <div class="order__header container-fluid pt-1">
         <div id="tableHead" class="widget-list row position-relative">
            <div class="widget-holder widget-sm col position-sticky" style="max-width: 65px;">
               <div class="layer"></div>
               <div class="widget-bg bg-transparent text-inverse number" style="height: 70px;">
                  <div class="widget-body p-0" style="height: 70px;">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600"></p><span class="-title d-block"><span class=""></span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col position-sticky" style="margin-left: -65px; left:50px;">
               <div class="widget-bg bg-primary text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Фото товара</p><span class="-title d-block"><span class=""></span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col position-sticky" style="left: 250px">
                  <div class="widget-bg bg-primary text-inverse">
                     <div class="widget-body">
                        <div class="-w-info media">
                           <div class="media-body w-50">
                              <p class="text-muted mr-b-5 fw-600">Ссылка на фото</p><span class="-title d-block"><span class=""></span></span>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="widget-holder widget-sm col position-sticky" style="left: 452px">
                  <div class="widget-bg bg-primary text-inverse">
                     <div class="widget-body">
                        <div class="-w-info media">
                           <div class="media-body w-50">
                              <p class="text-muted mr-b-5 fw-600">Ссылка на товар</p><span class="-title d-block"><span class=""></span></span>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
            
            <div class="widget-holder widget-sm col" style="margin-left: 50px">
                  <div class="widget-bg bg-danger">
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
               <div class="widget-bg bg-danger">
                  <div class="widget-body bg-danger text-inverse">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Цена</p><span class="-title d-block"><span class=""></span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-danger text-inverse">
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
               <div class="widget-bg bg-danger text-inverse">
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
               <div class="widget-bg bg-danger text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Модель</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col medium-block">
               <div class="widget-bg bg-success text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Кол-во шт. наличие</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-success text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Цена факт</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-success text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Комиссия %</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col medium-block">
               <div class="widget-bg bg-success text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Доставка по Китаю</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-success text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Сумма</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-success text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Общий вес</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-success text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Общий объём</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-success text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Примечание</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-success text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Статус</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-success text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Дата выкупа</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col long-block">
               <div class="widget-bg bg-success text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Дата приход на склад в Китае</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-primary text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Фото с фабрики</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-primary text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Фотоотчет</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-holder widget-sm col">
               <div class="widget-bg bg-primary text-inverse">
                  <div class="widget-body">
                     <div class="-w-info media">
                        <div class="media-body w-50">
                           <p class="text-muted mr-b-5 fw-600">Действия</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="order__body container-fluid mt-2">
         <div class="d-flex justify-content-between">
            <div>
               <div class="row">
                  <div class="col-6 d-flex flex-column justify-content-between">
                     <p>Логин клиента - {{$table->user_info->login}}</p>
                     <div class="d-flex">
                        <p>Количество позиций товара:</p>
                        <input type="text" value="{{$table->pos}}" class="bg-success text-dark">
                     </div>
                  </div>
                  <div class="col-6"></div>
               </div>
            </div>
            <div class="d-flex align-items-center">
               <p>Сумма заказа:</p>
               <input id="sumOrderInput" type="text" value="" readonly class="bg-success text-dark">
            </div>
         </div>
      </div>
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

<div class="modal modal-info fade bs-modal-md-info" id="myModal" tabindex="-1" role="dialog"
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
               <button type="button" class="btn btn-danger btn-rounded ripple text-left" onclick="resetLabelColor()"
                  data-dismiss="modal">Сохранить</button>
            </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>

<script>
   const href = window.location.href.split('/'),
         _page_id = href[href.length - 1],
         comission = 0.03;
   let activeBtn,
   infoState = {},
   orderSum = 0;

   window.addEventListener('DOMContentLoaded', async () => {
      let data = await getData(_page_id);
      data = await JSON.parse(data.data);

      const container = document.querySelector('.order__header');
      data.forEach((product, i) => {
         const row = document.createElement('div');
         const closedLength = product.PhotoUrl.length > product.ProductUrl.length 
               ? product.PhotoUrl.length 
               : product.ProductUrl.length;
         let closed = new Array(closedLength).fill('true');
         if (product.checkedItem === 'undefined') {
            closed = closed.map(item => item = 'undefined');
         } else if (product.checkedItem !== false) {
            closed[product.checkedItem] = 'false';
         }
         if (product.info) {
            infoState[i] = product.info;
         } else {
            infoState[i] = '';
         }
         let sum = 0;
      
         if (product.count && product.cost && product.chinaDelivery) {
            console.log(product.count, product.cost, product.chinaDelivery, comission);
            sum = (parseFloat(product.count) * parseFloat(product.cost) * comission + parseFloat(product.chinaDelivery)).toFixed(2);
         }

         orderSum += parseFloat(sum);

         row.classList.add('widget-list', 'row', 'orderRow', 'position-relative');
         row.innerHTML = `
               <div class="widget-holder widget-sm col position-sticky" style="max-width: 50px;">
                  <div class="layer"></div>
                  <div class="widget-bg bg-transparent text-inverse number">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-50">
                              <p class="text-muted mr-b-5 fw-600"></p><span class="-title d-block"><span class=""></span></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media number">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-light numBtn">
                                 <p class="text-dark fw-600 m-0">${i + 1}</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col position-sticky" name="photo-${i + 1}" style="left: 50px">
                     <div class="widget-bg bg-transparent text-inverse">
                        <div class="widget-body p-0">
                           <div class="-w-info media">
                              <div class="media-body w-100">
                                 <a class="btn btn-primary w-100" data-row="${i}" data-url="${product.Photo[0] ? product.Photo[0] : ''}" data-state="photosUrl" data-redact="false">Посмотреть</a>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="widget-holder widget-sm col position-sticky" name="photoUrl-${i + 1}" style="left: 250px">
                     <div class="widget-bg bg-transparent text-inverse">
                        <div class="widget-body p-0">
                           <div class="-w-info media">
                              <div class="media-body w-100">
                                 <div class="rounded-card bg-primary d-flex flex-column justify-content-between url-input-wrapper">
                                    <input class="url-input bg-primary" type="text" readonly name="imageUrl" value="${product.PhotoUrl[0] ? product.PhotoUrl[0] : ''}"> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="widget-holder widget-sm col position-sticky" name="productUrl-${i + 1}" style="left: 452px;">
                     <div class="widget-bg bg-transparent text-inverse">
                        <div class="widget-body p-0">
                           <div class="-w-info media">
                              <div class="media-body w-100">
                                 <div class="rounded-card bg-primary d-flex flex-column justify-content-between url-input-wrapper">
                                    <input class="url-input bg-primary" type="text" readonly name="url" value="${product.ProductUrl[0] ? product.ProductUrl[0] : ''}"> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="widget-holder widget-sm col">
                     <div class="widget-bg bg-transparent text-inverse">
                        <div class="widget-body p-0">
                           <div class="-w-info media">
                              <div class="media-body w-100">
                                 <div class="rounded-card bg-danger d-flex flex-column justify-content-between">
                                    <input class="url-input bg-danger text-muted text-center" type="text" readonly name="count" value="${product.count ? product.count : ''}"> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-danger d-flex flex-column justify-content-between">
                                 <input class="url-input bg-danger text-muted text-center" type="text" readonly name="cost" value="${product.cost ? product.cost : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-danger d-flex flex-column justify-content-between">
                                 <input class="url-input bg-danger text-muted text-center" type="text" readonly name="color" value="${product.color ? product.color : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-danger d-flex flex-column justify-content-between">
                                 <input class="url-input bg-danger text-muted text-center" type="text" readonly name="size" value="${product.size ? product.size : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-danger d-flex flex-column justify-content-between">
                                 <input class="url-input bg-danger text-muted text-center" type="text" readonly name="model" value="${product.model ? product.model : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col medium-block">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-success d-flex flex-column justify-content-between">
                                 <input class="url-input bg-success text-muted text-center" type="text" name="availability" value="${product.availability ? product.availability : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-success d-flex flex-column justify-content-between">
                                 <input class="url-input bg-success text-muted text-center" type="text" name="priceFact" value="${product.priceFact ? product.priceFact : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-success d-flex flex-column justify-content-between">
                                 <input class="url-input bg-success text-muted text-center" readonly type="text" name="commission" value="${comission*100}%"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col medium-block">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-success d-flex flex-column justify-content-between">
                                 <input class="url-input bg-success text-muted text-center" type="text" name="chinaDelivery" value="${product.chinaDelivery ? product.chinaDelivery : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-success d-flex flex-column justify-content-between">
                                 <input class="url-input bg-success text-muted text-center" readonly type="text" name="sum" value="${sum ? sum : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-success d-flex flex-column justify-content-between">
                                 <input class="url-input bg-success text-muted text-center" type="text" name="weight" value="${product.weight ? product.weight : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-success d-flex flex-column justify-content-between">
                                 <input class="url-input bg-success text-muted text-center" type="text" name="volume" value="${product.volume ? product.volume : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-success d-flex flex-column justify-content-between">
                                 <input class="url-input bg-success text-muted text-center" type="text" name="note" value="${product.note ? product.note : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-success d-flex flex-column justify-content-between">
                                 <input class="url-input bg-success text-muted text-center" type="text" name="status" value="${product.status ? product.status : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-success d-flex flex-column justify-content-between">
                                 <input class="url-input bg-success text-muted text-center" type="text" name="buyoutDate" value="${product.buyoutDate ? product.buyoutDate : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col long-block">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <div class="rounded-card bg-success d-flex flex-column justify-content-between">
                                 <input class="url-input bg-success text-muted text-center" type="text" name="chinaDate" value="${product.chinaDate ? product.chinaDate : ''}"> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <a class="btn btn-primary w-100" data-row="${i}" data-url="${product.PhotoFactory ? product.PhotoFactory[0] : ''}" data-state="photosFactory" data-redact="true">Посмотреть</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col">
                  <div class="widget-bg bg-transparent text-inverse">
                     <div class="widget-body p-0">
                        <div class="-w-info media">
                           <div class="media-body w-100">
                              <a class="btn btn-primary w-100" data-row="${i}" data-url="${product.PhotoReport ? product.PhotoReport[0] : ''}" data-state="photosReport" data-redact="true">Посмотреть</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-holder widget-sm col" name="action-${i + 1}">
                     <div class="widget-bg bg-transparent text-inverse ${closed[0] === 'true' ? 'redline' : ''}" data-row="${i}" data-item="0" data-closed="${closed[0]}">
                        <div class="widget-body p-0">
                           <div class="-w-info media">
                              <div class="media-body w-100 d-flex justify-content-between align-items-center" style="height: 39px;">
                                 <div class="order-action">
                                    <a onclick="checkItem(event)"><i class="fas fa-check text-success"></i></a>
                                 </div>
                                 <div class="order-action">
                                    <a onclick="closeItem(event)"><i class="fas fa-times text-danger"></i></a>
                                 </div>
                                 <div class="order-action">
                                    <a onclick="addInfo(event)"><i class="fas fa-exclamation text-warning" data-order="${i}"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
         `;

         container.append(row);

         const addWidget = (array, selector, textClass, name) => {
            if (array.length > 1) {
               const photoWrapper = document.querySelector(`[name="${selector}-${i + 1}"]`);
               for (let j = 1; j < array.length; j++) {
                  const widget = document.createElement('div');
                  widget.classList.add('widget-bg', 'bg-transparent', 'text-inverse', 'mt-2');
                  widget.innerHTML = `
                     <div class="widget-bg bg-transparent text-inverse w-75">
                        <div class="widget-body p-0">
                           <div class="-w-info media">
                              <div class="media-body w-100 d-flex">
                                 <div class="rounded-card bg-primary d-flex flex-column justify-content-between url-input-wrapper text-right" style="padding: 4px 0.75rem;">
                                    <input class="url-input bg-primary ${textClass}" readonly name="${name}" style="font-size: 13px" type="text" value="${array[j] ? array[j] : ''}"> 
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

         addWidget(product.PhotoUrl, 'photoUrl', '', 'imageUrl');
         addWidget(product.ProductUrl, 'productUrl', 'text-dark', 'url');

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
                           <a class="btn btn-primary w-75" style="font-size: 13px; padding: 5px 8px;" data-row="${i}" data-url="${product.Photo[j]}" data-state="photosUrl" data-redact="false">Посмотреть</a>
                        </div>
                     </div>
                  </div>
               `
               photoWrapper.append(widget);
            }
         }

         if (closedLength > 1) {
            const actionWrapper = document.querySelector(`[name="action-${i + 1}"]`);
            for (let j = 1; j < closedLength; j++) {
               const widget = document.createElement('div');
               widget.classList.add('widget-bg', 'bg-transparent', 'text-inverse');
               widget.style.marginTop = '4px';
               widget.dataset.row = i;
               widget.dataset.item = j;
               widget.dataset.closed = closed[j];
               if (closed[j] !== 'false' && closed[j] !== 'undefined') {
                  widget.classList.add('redline');
               }
               widget.innerHTML = `
               <div class="widget-body p-0">
                           <div class="-w-info media">
                              <div class="media-body w-100 d-flex justify-content-between align-items-center" style="height: 39px;">
                                 <div class="order-action">
                                    <a onclick="checkItem(event)"><i class="fas fa-check text-success"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
               `
               actionWrapper.append(widget);
            }
         }

      })

      document.querySelector('#sumOrderInput').value = orderSum;
      //При клике на инпут выделяется текст   
      const inputs = document.querySelectorAll('input');
      inputs.forEach(input => {
         input.addEventListener('click', () => input.select())
      })

      //Кнопки посмотреть фото
      const imgButtons = document.querySelectorAll('[data-url]');

      imgButtons.forEach(btn => {
         btn.addEventListener('click', () => openModalWithImg(btn, btn.dataset.url, btn.dataset.row, btn.dataset.redact));
      })

      const statusInput = document.querySelector('#orderStatus');
      statusInput.addEventListener('change', () => {
         showLoader();
         const body = {
            id: _page_id, status: statusInput.value
         };
         
         postData('{{ Route('write_orders_ReplaceOrder') }}', body)
               .then((res) => {
                  hideLoader();
                  if (res.status === true) {
                     console.log('Статус изменен');
                  }
               });
      })
   })
//Получаем информацию о заказе
   async function getData(id) {
      const body = { order_id: id };
      return await postData("{{Route('read_orders_SelectOrder')}}", body);
   }
   function openPhotoModal(redact) {
      const label = document.querySelector('.customInputLabel');
      if (redact) {
         label.classList.remove('hide')
      } else {
         label.classList.add('hide')
      }
      $('#myModal').modal('show');
   }
//Вставляем в тег дефолт картинку
   function pasteNoImage(imgTag) {
      imgTag.src = '{{asset('assets/admin/assets/img/no-image.png')}}';
   }
//Вставляем в тег картинку по url
   function changeModalImg(imgTag, url) {
      if (url == 'null') {
         pasteNoImage(imgTag);
         return;
      };
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
            openPhotoModal(true);
            } else {
               openPhotoModal(false);
            }
         setAttributeBySelector('#file1', 'name', id);
         return;
      }
      changeModalImg(imgTag, url);
      if (redact === 'true') {
         openPhotoModal(true);
      } else {
         openPhotoModal(false);
      }
      setAttributeBySelector('#file1', 'name', id);
   }
   
   function resetLabelColor() {
      const label = document.querySelector('.customInputLabel');
      label.style.background = 'none';
   }

//Постим на сервер загруженную картинку и получаем ее url
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

   function checkItem(e) {
      const actionWrapper = e.target.closest('.widget-bg.bg-transparent.text-inverse');
      actionWrapper.classList.remove('redline');
      $.each($(actionWrapper).siblings(), function (i, v) {
         v.classList.add('redline');
         v.dataset.closed = 'true';
      })
      actionWrapper.dataset.closed = 'false';
   }

   function closeItem(e) {
      const actionWrapper = e.target.closest('.widget-bg.bg-transparent.text-inverse');
      actionWrapper.classList.add('redline');
      $.each($(actionWrapper).siblings(), function (i, v) {
         v.classList.add('redline');
         v.dataset.closed = 'true';
      })
      actionWrapper.dataset.closed = 'true';
   }

   function addInfo(e) {
      const info = prompt('Введите примечание');
      infoState[e.target.dataset.order] = info;
   }

//Собираем заказ и отправляем на сервер
   function makeOrder() {
      showLoader();
      const orderRows = document.querySelectorAll('.orderRow'),
            dataToServer = {id: _page_id, json: []},
            photosUrl = getPhotosFromInputSelector('photosUrl'),
            photosFactory = getPhotosFromInputSelector('photosFactory'),
            photosReport = getPhotosFromInputSelector('photosReport');
      orderRows.forEach((order, i) => {
         const data = {},
               photo = [],
               photoFactory = [],
               photoReport = [],
               urlPhotos = [],
               urlProducts = [],
               urlPhotoInputs = order.querySelectorAll('[name="imageUrl"]'),
               urlProductInputs = order.querySelectorAll('[name="url"]'),
               count = order.querySelector('[name="count"]').value,
               cost = order.querySelector('[name="cost"]').value,
               color = order.querySelector('[name="color"]').value,
               size = order.querySelector('[name="size"]').value,
               model = order.querySelector('[name="model"]').value,
               //green
               availability = order.querySelector('[name="availability"]').value,
               priceFact = order.querySelector('[name="priceFact"]').value,
               chinaDelivery = order.querySelector('[name="chinaDelivery"]').value,
               weight = order.querySelector('[name="weight"]').value,
               volume = order.querySelector('[name="volume"]').value,
               note = order.querySelector('[name="note"]').value,
               status = order.querySelector('[name="status"]').value,
               buyoutDate = order.querySelector('[name="buyoutDate"]').value,
               chinaDate = order.querySelector('[name="chinaDate"]').value;


         const closed = order.querySelector('.widget-bg.bg-transparent.text-inverse[data-closed="false"]'),
               undef = order.querySelector('.widget-bg.bg-transparent.text-inverse[data-closed="undefined"]');
         let checkedItem;
         if (closed) {
            checkedItem = closed.dataset.item;
         } else if (undef) {
            checkedItem = 'undefined';
         } else {
            checkedItem = 'false';
         }

         let info;
         if (infoState[i]) {
            info = infoState[i];
         } else {
            info = '';
         }

         console.log(checkedItem, order);
         const makeData = (inputs, array, fieldName) => {
            data[fieldName] = array;
            inputs.forEach(input => {
               data[fieldName].push(input.value);
            })
         }

         const pushPhotosToArray = (photos, array) => {
            if (photos[i]) {
               photos[i].forEach(url => {
                  array.push(url);
               })
            }
         }

         makeData(urlPhotoInputs, urlPhotos, 'PhotoUrl');
         makeData(urlProductInputs, urlProducts, 'ProductUrl');
         pushPhotosToArray(photosUrl, photo);
         pushPhotosToArray(photosFactory, photoFactory);
         pushPhotosToArray(photosReport, photoReport);

         if (photo) {
            data['Photo'] = photo;
         }
         if (photoFactory) {
            data['PhotoFactory'] = photoFactory;
         }
         if (photoReport) {
            data['PhotoReport'] = photoReport;
         }
         data['count'] = parseInt(count);
         data['cost'] = parseInt(cost);
         data['color'] = color;
         data['size'] = size;
         data['model'] = model;
         //green
         data['availability'] = availability;
         data['priceFact'] = priceFact;
         data['chinaDelivery'] = chinaDelivery;
         data['weight'] = weight;
         data['volume'] = volume;
         data['note'] = note;
         data['status'] = status;
         data['buyoutDate'] = buyoutDate;
         data['chinaDate'] = chinaDate;
         data['checkedItem'] = checkedItem;
         data['info'] = info;
         dataToServer['json'].push(data);
      })

      postData('{{Route("ReplaceOrder")}}', dataToServer)
            .then(res => {
               hideLoader();
               if (res.status === true) {
                  console.log('Успешно создан: ', JSON.stringify(res));
                  window.location.href = '{{Route('AdminPage', ['page' => 'orders'])}}'
               }
            });
   }
</script>