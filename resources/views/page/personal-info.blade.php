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
               <input type="text" name="fullName" class="form-control m-0">
            </div>
         </div>
         <div class="card-input row mt-2">
            <label for="phone" class="col-form-label col-sm-3">Телефон:</label>
            <div class="col-sm-9 p-0">
               <input type="tel" name="phone" class="form-control m-0">
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
               <input type="text" name="address" class="form-control m-0">
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

<script>
   const addForm = document.querySelector('.add__info-form'),
         addBtn = document.querySelector('.add__address-btn > span');

   addBtn.addEventListener('click', () => {
      addForm.style.display = 'block';
   })

   $('#AddAddress').on('submit', function(e) {
      e.preventDefault();
      
      $.ajax({
         url: '/',
         method: 'post',
         data: $(this).serialize(),
         contentType: false,
         success: function (response) {
            alert('Адрес успешно добавлен')
            window.location.reload();
         },
         error: function (err) {
            console.log(err);
         }
      });
   })
</script>