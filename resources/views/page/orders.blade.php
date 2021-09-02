<div class="row text-input">
   <div class="card-input col-4 row">
      <label for="number" class="col-form-label col-sm-3">Номер:</label>
      <div class="col-sm-9 p-0">
         <input type="text" id="number" name="number" class="form-control">
      </div>
   </div>
   <div class="card-input col-3 row">
      <label for="number" class="col-form-label col-sm-4">Статус:</label>
      <div class="col-sm-8 p-0">
         <select class="form-select" aria-label="Выбор статуса">
            <option selected>Прибыл</option>
            <option value="1">Отправлен</option>
            <option value="2">Упаковывается</option>
            <option value="3">Обрабатывается</option>
          </select>
      </div>
   </div>
   <div class="col-4">
      <button type="button" class="btn btn-primary">Поиск</button>
   </div>
</div>
<div class="table__wrapper mt-3">
   <table class="table table-bordered">
      <thead>
         <tr>
           <th scope="col">Номер</th>
           <th scope="col">Сохранён/Оформлен</th>
           <th scope="col">Сумма</th>
           <th scope="col">Комиссия</th>
           <th scope="col">Статус</th>
           <th scope="col">Дата/Время</th>
           <th scope="col">Операции</th>
           <th scope="col">Примечания</th>
         </tr>
       </thead>
       <tbody>
         @foreach($table as $result)
            <tr>
               <td>{{$result->number}}</td>
               <td>@if($result->status == 1) Отправлен @elseif($result->status == 2) Прибыл @elseif($result->status == 3) Упаковывается @elseif($result->status == 4) Обрабатывается @endif</td>
               <td class="table-summ">{{$result->cost}}</td>
               <td class="table-commission">{{$result->commission}}%</td>
               <td>{{$result->status2}}</td>
               <td>{{$result->datetime}}</td>
               <td>....</td>
               <td>...</td>
            </tr>
         @endforeach
       </tbody>
   </table>
</div>