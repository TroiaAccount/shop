<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
   <script src="https://kit.fontawesome.com/e573f55991.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <title>Cabinet</title>
</head>
<body>
   
   @include('menu')
   
   <main id="page">
      <div class="page__wrapper">

         @include('header')

         <section class="page__body body">
            <div class="container body__wrapper">
               <div class="card">
                  <div class="card-body">
                     @if($subpage == null)
                        @include('page/' . $page)
                     @else
                        @include('page/' . $page . '/' . $subpage)
                     @endif
                  </div>
               </div>
            </div>
         </section>

      </div>
   </main>

   <script src="{{asset('assets/js/index.js')}}"></script>
</body>
</html>