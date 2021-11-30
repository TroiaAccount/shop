<main class="main-wrapper clearfix">
   <!-- Page Title Area -->
   <div class="container-fluid">
      <div class="row page-title clearfix">
         <div class="page-title-left">
               <h6 class="page-title-heading mr-0 mr-r-5">Курс юаня</h6>
         </div>
         <!-- /.page-title-right -->
      </div>
      <!-- /.page-title -->
   </div>
   <!-- /.container-fluid -->
   <!-- ================================== -->
   <!-- Different data widgets ============ -->
   <!-- =================================== -->
   <div class="container-fluid">
      <div class="widget-list">
         <div class="row">
               <div class="col-md-12 widget-holder">
                  <div class="row align-items-center">
                     <div class="col-3">
                        <input id="rate" type="number" step="any" class="form-control">
                     </div>
                     <div class="col-1">
                        <a onclick="redactRate()" class="btn btn-default btn-success">Сохранить</a>
                     </div>
                  </div>
                  <!-- /.widget-bg -->
               </div>
               <!-- /.widget-holder -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.widget-list -->
   </div>
   <!-- /.modal -->
</main>
<script>
   function redactRate() {
      showLoader();
      const rate = document.querySelector('#rate').value;
      
      const body = {id};

      postData('{{ Route('write_orders_CompletedOrder') }}', body)
         .then((res) => {
            hideLoader();
            if (res.status === true) {
               window.location.reload();
            }
         });
   }
</script>
