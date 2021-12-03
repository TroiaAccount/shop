@php
   if($page == "orders"){
      $table = $table['order'];
   }
@endphp
@if($page != "favorites")
   @php
      $allPage = $table->lastPage();
      $currentPage = $table->currentPage();
      $startPage = 1;
      if($currentPage > 5){
         $startPage = $currentPage - 5;
      }
      $finalPage = $startPage + 10;
      if($finalPage > $allPage){
         $finalPage = $allPage;
      }
   @endphp
   <div class="change__page-wrapper w-100" id="pagination">

      <div class="d-flex justify-content-between">
         <div style="min-width: 100px; margin-right: 10px">
            <p class="text-center" style="top: 0px; left: 25px;">Всего страниц: {{$allPage}}. Всего заказов: {{$table->count() * $allPage}}</p>
         </div>
   
         <div class="buttons-wrapper d-flex justify-content-end">
            <div class="change__buttons-group">
               <div class="d-flex justify-content-center">
                  <a href="{{$table->previousPageUrl()}}"><button class="btn btn-outline-secondary change-page-btn" style="border-bottom-right-radius: 0px; border-top-right-radius: 0px;"><i class="fas fa-chevron-left fa-xs"></i></button></a>
                  @for($i = $startPage; $i <= $finalPage; $i++)
                     @if($table->currentPage() == $i)
                        <div class="page-indicator">
                           <p>{{$table->currentPage()}}</p>
                        </div>
                     @else
                        <a href="?page={{$i}}"><button class="btn btn-outline-secondary change-page-btn" style="border-bottom-right-radius: 0px; border-top-right-radius: 0px;"><i class="fas">{{$i}}</i></button></a>
                     @endif
                  @endfor
   
                  <a href="{{$table->nextPageUrl()}}"><button class="btn btn-outline-secondary change-page-btn" style="border-bottom-left-radius: 0px; border-top-left-radius: 0px;"><i class="fas fa-chevron-right fa-xs"></i></button></a>
               </div>
            </div>
   
         </div>
      </div>
   </div>
@endif