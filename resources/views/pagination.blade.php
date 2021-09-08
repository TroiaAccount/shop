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

       <div class="change__buttons-group ms-4">
         <select class="form-select" aria-label="select-page" style="width: 80px; padding: 4px 6px;">
            @for($i = 1; $i <= $table->count(); $i++)
               <option @if($i == $table->currentPage()) selected @endif>{{$i}}</option>
            @endfor
         </select>
      </div>
   </div>
</div>