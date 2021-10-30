@php
   if($page == "orders"){
      $table = $table['order'];
   }
@endphp
@if($page != "favorites")
   <div class="change__page-wrapper" id="pagination">
      <div class="buttons-wrapper d-flex justify-content-end">

      <div class="change__buttons-group">
            <div class="d-flex justify-content-center">
               <a href="{{$table->previousPageUrl()}}"><button class="btn btn-outline-secondary change-page-btn" style="border-bottom-right-radius: 0px; border-top-right-radius: 0px;"><i class="fas fa-chevron-left fa-xs"></i></button></a>
               <div class="page-indicator">
                  <p>{{$table->currentPage()}}</p>
               </div>
               <a href="{{$table->nextPageUrl()}}"><button class="btn btn-outline-secondary change-page-btn" style="border-bottom-left-radius: 0px; border-top-left-radius: 0px;"><i class="fas fa-chevron-right fa-xs"></i></button></a>
            </div>
         </div>

      </div>
   </div>
@endif