<div class="bg-primary sidenav">
      <div class="sidenav__profile-wrapper container">
         <div class="sidenav__profile d-flex justify-content-start profile">
            <div class="row align-items-center">
               <div class="col-6" style="margin-left: -10px">
                  <div class="icon-wrapper">
                     <img class="profile__icon" src="{{asset('assets/images/profile-icon.png')}}" alt="profile photo">
                  </div>
               </div>
               <div class="col-6">
                  <h3 class="profile__phone">{{$user_info->word}}</h3>
                  <p class="profile__balance">Баланс: {{$user_info->balance}}<i class="ms-2 fas fa-plus hovered-link-green"></i></p>
                  <a href="#" onclick="Exit()" class="profile__exit">Выход</a>
               </div>
            </div>
         </div>
      </div>
      <script>
         function Exit(){
            $.ajax({
               url: '{{Route("Exit")}}',
               method: 'get',
               dataType: 'json',
               data: $(this).serialize(),
               success: function(data){
                  location.reload();
               }
            });
         };
      </script>
      <nav class="sidenav__nav">
         <ul class="nav flex-column">
            <li class="nav-item">
               <a class="nav-link sn @if($page == 'orders') _active @endif" href="{{Route('page', ['page' => 'orders'])}}"><i class="fas fa-plane-departure me-3"></i>Мои заказы</a>
            </li>
            <li class="nav-item">
               <a class="nav-link sn @if($page == 'delivery') _active @endif"" href="{{Route('page', ['page' => 'delivery'])}}"><i class="fas fa-truck me-3"></i>Моя доставка</a>
            </li>
            {{-- <li class="nav-item">
               <a class="nav-link sn @if($page == 'mini-market') _active @endif" href="{{Route('page', ['page' => 'mini-market'])}}"><i class="fas fa-shopping-cart me-3"></i>Заказы Мини-магазина</a>
            </li> --}}
            <li class="nav-item">
               <a class="nav-link sn @if($page == 'personal-info') _active @endif" href="{{Route('page', ['page' => 'personal-info'])}}"><i class="fas fa-address-card me-3"></i>Персональные данные</a>
            </li>
            <li class="nav-item">
               <a class="nav-link sn @if($page == 'history') _active @endif" href="{{Route('page', ['page' => 'history'])}}"><i class="fas fa-envelope me-3"></i>История сообщений</a>
            </li>
            {{-- <li class="nav-item">
            <a class="nav-link sn @if($page == 'return') _active @endif" href="{{Route('page', ['page' => 'return'])}}"><i class="fas fa-exchange-alt me-3"></i>Возврат товара</a>
            </li> --}}
            <li class="nav-item">
               <a class="nav-link sn @if($page == 'favorites') _active @endif" href="{{Route('page', ['page' => 'favorites'])}}"><i class="fas fa-heart me-3"></i>Избранное</a>
            </li>
            {{-- <li class="nav-item">
            <a class="nav-link sn @if($page == 'rebuy') _active @endif" href="{{Route('page', ['page' => 'rebuy'])}}"><i class="fas fa-sync-alt me-3"></i>Перепродажа</a>
            </li> --}}
         </ul>
      </nav>
   </div>
   