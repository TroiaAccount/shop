<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/css/cabinet.css')}}">
   <script src="https://kit.fontawesome.com/e573f55991.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <title>Cabinet</title>
</head>
<body>
   @if ($page != 'blank')
      @include('menu')
   @endif
   @if($page == 'blank')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   @endif
   
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
   <script src="{{asset('assets/js/index.js')}}"></script>
   <script>
      postData("{{ Route('Select') }}", {type: 2})
         .then(res => {
            console.log(res)
            res.data.forEach(notification => {
               const div = document.createElement('div');
               const ntfWrapper = document.querySelector('.notificationWrapper');
               div.classList.add('notification-msg');
               div.innerHTML = `
                  <div class="d-flex justify-content-between">
                     <div class="msg-title">Привет!</div>
                     <div class="msg-from">admirated</div>
                  </div>
                  <div class="msg-text">Мы рады сообщить тебе о том что твой товар уже едет к тебе!</div>
               `
               ntfWrapper.append(div);
            })
         })
   </script>
</body>
</html>