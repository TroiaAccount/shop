<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
      <title>Авторизация</title>
      <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
      <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>
      <link rel="stylesheet" href="assets/css/auth.css">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://unpkg.com/imask"></script>
   </head>

   <body>
      <div class="materialContainer">
         <form id="Auth">
            @csrf
            <div class="box">
               <div class="title">LOGIN</div>

               <div class="input">
                  <label for="name">Телефон</label>
                  <input type="tel" name="login" id="name" class="imaskjs__input_tel">
                  <span class="spin"></span>
               </div>
               <div class="input">
                  <label for="pass">Пароль</label>
                  <input type="password" name="password" id="pass">
                  <span class="spin"></span>
               </div>
               <div class="button">
                  <button style="background: red;"><span style="color: #fff;">Войти</span></button>
               </div>
               <a href="{{Route('RecoveryPage')}}" class="pass-forgot">Forgot your password?</a>
            </div>
         </form>
         <div class="overbox">
            <div class="material-button alt-2"><span class="shape"></span></div>
            <form id="Register">
               @csrf

               <div class="title">REGISTER</div>
               <div class="input">
                  <label for="regname">Телефон</label>
                  <input type="tel" name="login" id="regname" class="imaskjs__input_tel">
                  <span class="spin"></span>
               </div>
               <div class="input" style="margin-bottom: 60px">
                  <label for="regpass">Пароль</label>
                  <input type="password" name="password" id="regpass">
                  <span class="spin"></span>
               </div>
               <div class="input__checkbox">
                  <input type="checkbox" id="opt" name="opt">
                  <label for="opt">Я <a href="#" class="auth__href">оптовый покупатель</a></label>
               </div>
               <div class="input__checkbox" style="top: 330px;">
                  <input type="checkbox" id="policies" name="policies" required>
                  <label for="policies">Я принимаю <a href="#" class="auth__href">договор</a>, <a href="#" class="auth__href">согласие</a> и <a href="#" class="auth__href">положение</a> <br> об обработке персональных данных</label>
               </div>
               <div class="button">
                  <button><span>Зарегистрироваться</span></button>
               </div>
            </form>
            <form id="code" style="display: none">
               @csrf
               <div class="title">REGISTER</div>
               <div class="input">
                  <label for="code" style="line-height: 18px; font-size: 18px; font-weight: 100; top: 0px;">Код</label>
                  <input type="text" name="code" id="code">
                  <input type="hidden" id="login" name="login">
                  <span class="spin"></span>
               </div>
               <div class="button">
                  <button><span>Зарегистрироваться</span></button>
               </div>
            </form>
         </div>
      </div>
      <script src="{{asset('assets/js/index.js')}}"></script>
      <script>
         const alt2 = document.querySelector('.alt-2');
         alt2.addEventListener('click', () => {
            const checkboxes = document.querySelectorAll('.input__checkbox');
            setTimeout(() => {
               checkboxes.forEach(item => {
               item.classList.toggle('active');
            });
            }, 500);
         });
         $("#Auth").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                  url: '{{Route("Auth")}}',
                  method: 'post',
                  dataType: 'json',
                  data: $(this).serialize(),
                  success: function(data){
                     if(data.status == true){
                        location = "{{Route('page', ['page' => 'orders'])}}";
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
         $("#Register").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                  url: '{{Route("Register")}}',
                  method: 'post',
                  dataType: 'json',
                  data: $(this).serialize(),
                  success: function(data){
                     if(data.status == true){
                        let register = document.getElementById('Register');
                        register.style.display = "none";
                        let form = document.getElementById('code');
                        form.style.display = "block";
                        let login = document.getElementById('login');
                        let LoginAuth = document.getElementById('regname');
                        login.value = LoginAuth.value;
                        location = "{{Route('page', ['page' => 'orders'])}}";
                     } else {
                        alert(data.error);
                     }
                  }
            });
         });

         $("#code").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                  url: '{{Route("CheckCode")}}',
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
      </script>
   </body>
</html>
