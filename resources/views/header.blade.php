<section class="page__header header container">
            <div class="header__wrapper d-flex justify-content-between">
               <div class="header__arrival">
                  <ul class="nav header-links">
                     @if($page == "delivery")
                     <li class="nav-item ms-3">
                        <div class="link-wrapper">
                           <a href="#" class="nav-link hl _active">Доставка до Москвы</a>
                        </div>
                     </li>
                     <li class="nav-item ms-5">
                        <div class="link-wrapper">
                           <a href="#" class="nav-link hl">Доставка по Росии</a>
                        </div>
                     </li>
                     @endif
                     @if($page == "orders")
                     <li class="nav-item ms-3">
                        <div class="link-wrapper">
                           <a href="#" class="nav-link hl _active">Мои заказы</a>
                        </div>
                     </li>
                     @endif
                     @if($page == "personal-info")
                     <li class="nav-item ms-3">
                        <div class="link-wrapper">
                           <a href="#" class="nav-link hl _active">Адрес доставки</a>
                        </div>
                     </li>
                     @endif
                     @if($page == "history")
                     <li class="nav-item ms-3">
                        <div class="link-wrapper">
                           <a href="#" class="nav-link hl _active">История сообщений</a>
                        </div>
                     </li>
                     @endif
                     @if($page == "favorites")
                     <li class="nav-item ms-3">
                        <div class="link-wrapper">
                           <a href="#" class="nav-link hl _active">Избранное</a>
                        </div>
                     </li>
                     @endif
                     @if($page == "return")
                     <li class="nav-item ms-3">
                        <div class="link-wrapper">
                           <a href="#" class="nav-link hl _active">Возврат товара</a>
                        </div>
                     </li>
                     @endif
                     @if($page == "rebuy")
                     <li class="nav-item ms-3">
                        <div class="link-wrapper">
                           <a href="#" class="nav-link hl _active">Перепродажа</a>
                        </div>
                     </li>
                     @endif
                     @if($page == "mini-market")
                     <li class="nav-item ms-3">
                        <div class="link-wrapper">
                           <a href="#" class="nav-link hl _active">Заказы мини-магазина</a>
                        </div>
                     </li>
                     @endif
                     @if($subpage == "order")
                     <li class="nav-item ms-3">
                        <div class="link-wrapper">
                           <a href="#" class="nav-link hl _active">Онлайн "Бланк Заказа"</a>
                        </div>
                     </li>
                     @endif
                  </ul>
               </div>
               <div class="header__nav">
                  <ul class="nav">
                     <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-bell"></i></a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">Главная</a>
                     </li>
                     <li class="nav-item">
                        <a href="{{Route('Page', ['page' => 'create', 'subpage' => 'order'])}}" class="nav-link">Создать заказ</a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-language me-2"></i> русский язык</a>
                     </li>
                  </ul>
               </div>
            </div>
         </section>