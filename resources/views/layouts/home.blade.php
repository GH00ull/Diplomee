<!DOCTYPE html>
<html lang="en">

@section('head')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/home.css') }}">
        <title>вишьлист</title>
    </head>
@show

<body>
    @section('nav')
        <nav class="navbar">
            <div class="navbar-container">
                <div class="navbar-logo">
                    <a href="#"><img src="logo.png" alt="Лого"></a>
                </div>
                <div class="navbar-links">
                    <ul>
                        <li><a href="#">Добавить подарок</a></li>
                        <li><a href="#">Профиль</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    @show
    <div class="content">
        @yield('content')
    </div>
    @section('footer')
        <footer>
            <div class="footer-container">
                <div class="footer-links">
                    <ul>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Политика конфиденциальности</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

    @show
</body>

</html>
