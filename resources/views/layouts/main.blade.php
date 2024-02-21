<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8" />
    <title>billCollection</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="shortcut icon" href="{{asset('/assets/img/logo.png')}}">

    <!-- Flaticon Font -->
 <link rel="stylesheet" href="{{ asset('assets/lib/fontawesome-v6.4.2/css/all.css') }}">
  <!-- <link rel="stylesheet" href="./assets/lib/bootstrap.min.css"> -->
  <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>

<body>
    <header class="header">
      <div class="container">
          <a title="nothing" href="#" class="logo">
            <img src="assets/img/logo.png" alt="">
          </a>
          <a class="loginBtn btn_hover">
            تسحيل الدخول
          </a>
      </div>
  </header>
  <main class="main">
  <div class="container">
    @yield('content')
  </div> 
  </main>
    
  
    <footer class="footer">
      <div>
        <span>
          &copy; شركة بن دول للصرافة
        </span>
      </div>
    </footer>
  
  <script src="{{ asset('assets/lib/jquery-3.7.1.js')}}"></script>
    <script>
      $('#uploadIcon').on('click' , function(){
        $('#uploadInput').focus().trigger('click');
      });
    </script>
  </script>
  </body>

</html>
