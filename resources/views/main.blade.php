<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/css/cabinet.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/css/loader.css')}}">
   <script src="https://kit.fontawesome.com/e573f55991.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <title>Cabinet</title>
</head>
<body>
   @if ($page != 'blank')
      @include('menu')
   @endif
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
   <main id="page" @if ($page == 'blank') style="margin: 0" @endif>
      <div class="page__wrapper">

         @include('header')

         <section class="page__body body">
            <div class="container body__wrapper">
               <div class="card">
                  <div class="card-body @if ($page == "blank" || $page == "create")blank-card @endif">
                     @if($subpage == null || $page == "blank")
                        @include('page/' . $page)
                     @else
                        @include('page/' . $page . '/' . $subpage)
                     @endif
                  </div>
               </div>
            </div>
         </section>

      </div>
   </main>
   <div class="loader-wrapper hide">
      <div class="loader"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>
   </div>
   <div class="modal" tabindex="-1" id="myModal">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Загрузите чек</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="d-flex flex-column modal-content-wrapper">
               <div class="image">
                  <img id="balanceImg" src="{{asset('/assets/images/no-image.png')}}" alt="">
               </div>
               <div class="file-input">
                  <div class="widget-list">
                     <div class="row">
                        <div class="col-md-12 widget-holder">
                           <div class="widget-bg">
                              <div class="widget-body clearfix p-0 pt-3">
                                 <input type="file" class="customInput" id="balanceFile">
                                 <label class="customInputLabel" for="balanceFile">Выбрать фото</label>
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
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="postCheck()">Отправить</button>
         </div>
      </div>
   </div>
   <script src="{{asset('assets/js/loader.js')}}"></script>
   <script src="{{asset('assets/js/index.js')}}"></script>
   <script>
      postData("{{ Route('Select') }}", {type: 2})
         .then(res => {
            res.data.forEach(notification => {
               const div = document.createElement('div');
               const ntfWrapper = document.querySelector('.notificationWrapper');
               div.classList.add('notification-msg');
               div.innerHTML = `
                  <div class="d-flex justify-content-between">
                     <div class="msg-title">${notification.title}</div>
                     <div class="msg-from">${notification.from_}</div>
                  </div>
                  <div class="msg-text">${notification.text}</div>
               `
               ntfWrapper.append(div);
            })
         })
   
      async function getImageUrl(e) {
         const file = e.target.files[0];
         const _token = document.querySelector('[name="_token"]').value;
         const formData = new FormData();
         formData.append('image', file);
         formData.append('_token', _token);
         const res = await postFormData('{{Route("UploadOrderPhoto")}}', formData);
         document.querySelector('#balanceImg').src = res.url;
         console.log('Успешно создан: ', JSON.stringify(res));
         e.target.value = '';
      }

      async function postCheck() {
         
      }

      window.addEventListener('DOMContentLoaded', () => {
         const myModal = new bootstrap.Modal(document.getElementById('myModal')),
               plusBtn = document.querySelector('.hovered-link-green'),
               input = document.querySelector('#balanceFile');

         plusBtn.addEventListener('click', openModal);
         input.addEventListener('change', (e) => getImageUrl(e));

         function openModal() {
            const label = document.querySelector('.customInputLabel');
            myModal.show();
         }
      })
   </script>
</body>
</html>