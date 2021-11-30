<div class="add__address-wrapper border-bottom">
    <div class="add__address-btn">
        <span><i class="fas fa-xs fa-plus me-1"></i>Добавить</span>
    </div>
</div>
<div class="add__info-form">
   <form id="AddAddress">
      @csrf
      <div class="form-wrapper">
         
         <div class="card-input row mt-2">
            <label for="fullName" class="col-form-label col-sm-3">ФИО:</label>
            <div class="col-sm-9 p-0">
               <input type="text" name="full_name" class="form-control m-0">
            </div>
         </div>
         <div class="card-input row mt-2">
            <label for="phone" class="col-form-label col-sm-3">Телефон:</label>
            <div class="col-sm-9 p-0">
               <input type="tel" name="telephone" class="form-control m-0">
            </div>
         </div>
         <div class="card-input row mt-2">
            <label for="email" class="col-form-label col-sm-3">E-mail:</label>
            <div class="col-sm-9 p-0">
               <input type="email" name="email" class="form-control m-0">
            </div>
         </div>
         <div class="card-input row mt-2">
            <label for="address" class="col-form-label col-sm-3">Адрес:</label>
            <div class="col-sm-9 p-0">
               <input type="text" name="adres" class="form-control m-0">
            </div>
         </div>
         <div class="card-input row mt-2">
            <label for="passport" class="col-form-label col-sm-3">Паспорт:</label>
            <div class="col-sm-9 p-0">
               <input type="text" name="passport" class="form-control m-0" placeholder="Серия и номер паспорта">
            </div>
         </div>

         <div class="mt-3 row justify-content-center">
            <button type="submit" class="btn btn-primary col-3">Добавить</button>
         </div>
      </div>
   </form>
</div>
<div class="table__wrapper mt-3">
   <table class="table table-bordered">
      <thead>
         <tr>
            <th scope="col">ФИО</th>
            <th scope="col">Адрес</th>
            <th scope="col">Номер телефона</th>
            <th scope="col">Почта</th>
            <th scope="col">Паспорт</th>
         </tr>
      </thead>
      <tbody id="table-body">
         @foreach($table as $result)
            <tr>
               <td>{{$result->full_name}}</td>
               <td>{{$result->adres}}</td>
               <td class="table-summ">{{$result->telephone}}</td>
               <td class="table-commission">{{$result->email}}</td>
               <td>{{$result->passport}}</td>
            </tr>
         @endforeach
      </tbody>
   </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
<script>
   $('input[name="passport"]').mask('99 99 999999');

   const addForm = document.querySelector('.add__info-form'),
         addBtn = document.querySelector('.add__address-btn > span');

   addBtn.addEventListener('click', () => {
      if(addForm.style.display == 'block'){
         addForm.style.display = 'none';
      } else {
         addForm.style.display = "block";
      }

   })


   $('#AddAddress').on('submit', function(e) {
      e.preventDefault();
      showLoader();
      $.ajax({
         url: '{{Route("CreateAdres")}}',
         method: 'post',
         data: $(this).serialize(),
         dataType: 'json',
         success: function (response) {
            //alert('Адрес успешно добавлен')
            hideLoader();
            window.location.reload();
            if(response.status == true){

            } else {
               alert(response.error);
            }
         },
      });
   })
</script>