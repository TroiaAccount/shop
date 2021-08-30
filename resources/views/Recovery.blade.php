<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
      <title>Авторизация</title>
      <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
      <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://unpkg.com/imask"></script>
   </head>

   <body>
      <div class="materialContainer">
         <form id="Auth">
            @csrf
            <div class="box">
               <div class="title">RECOVERY</div>

               <div class="input">
                  <label for="name">Телефон</label>
                  <input type="tel" name="login" id="name" class="imaskjs__input_tel">
                  <span class="spin"></span>
               </div>
               <div class="button">
                  <button style="background-color: #ED2553; color: white;"><span>Восстановить</span></button>
               </div>
               <!--<a href="" class="pass-forgot">Forgot your password?</a> -->
            </div>
         </form>
         <form id="Recovery" style="display: none;">
            @csrf
            <div class="box">
               <div class="title">RECOVERY</div>

               <div class="input">
                  <label for="code">Код</label>
                  <input type="text" name="code" id="code" >
                  <input type="hidden" name="id" id="id">
                  <span class="spin"></span>
               </div>
               <div class="input">
                  <label for="password">Пароль</label>
                  <input type="password" name="password" id="password" >
               </div>
               <div class="button">
                  <button style="background-color: #ED2553; color: white;"><span>Восстановить</span></button>
               </div>
               <!--<a href="" class="pass-forgot">Forgot your password?</a> -->
            </div>
         </form>
      </div>
      <script src="{{asset('assets/js/index.js')}}"></script>
      <script>
         $("#Auth").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                  url: '{{Route("Recovery")}}', 
                  method: 'post',
                  dataType: 'json',
                  data: $(this).serialize(),
                  success: function(data){
                     if(data.status == true){
                        let id = document.getElementById('id');
                        id.value = data.data;
                        let auth = document.getElementById('Auth');
                        auth.style.display = "none";
                        let recovery = document.getElementById('Recovery');
                        recovery.style.display = "block";
                        alert('На ваш номер телефона отправлено письмо с кодом');
                     } else {
                        alert(data.error);
                     }
                  }
            });
         });
         $("#Recovery").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                  url: '{{Route("RecoveryLast")}}', 
                  method: 'post',
                  dataType: 'json',
                  data: $(this).serialize(),
                  success: function(data){
                     if(data.status == true){
                        location = "{{Route('AuthPage')}}";
                     } else {
                        alert(data.error);
                     }
                  }
            });
         });
         var elements = document.getElementsByClassName('imaskjs__input_tel');
         for (var i = 0; i < elements.length; i++) {
            new IMask(elements[i], {
                  mask: '+000000000000',
            });
         }
      </script>
   </body>
</html>
