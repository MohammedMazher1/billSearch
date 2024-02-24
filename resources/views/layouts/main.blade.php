<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8" />
    <title>billCollection</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="shortcut icon" href="{{ asset('/assets/img/logo.png') }}">
    <!-- Flaticon Font -->
    <!-- <link rel="stylesheet" href="./assets/lib/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <a title="nothing" href="/" class="logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </a>
            @guest
                <a class="loginBtn btn_hover" href="{{ route('login') }}">
                    تسجيل الدخول
                </a>
            @else
                <a class="loginBtn btn_hover" href="{{ route('logout') }}">
                    تسجيل الخروج
                </a>
            @endguest

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
    <script src="{{ asset('assets/lib/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    </script>
</body>

</html>
