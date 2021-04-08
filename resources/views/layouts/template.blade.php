
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bare - Start Bootstrap Template</title>
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/stile.css') }}" rel="stylesheet">
<!-- include summernote css/js -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: '#mytextarea'
  });
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


</head>

<body>
@include('layouts.nav')

  <!-- Page Content -->
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4">BlogApp!</h1>
      <p class="lead">Una semplice app in Laravel per creare un sito di blogging</p>
      <hr class="my-4">
    
    </div>
    <div class="row">
      <div class="col-lg-12">
@yield('content')



      </div>
    </div>
  </div>


</body>


</html>
