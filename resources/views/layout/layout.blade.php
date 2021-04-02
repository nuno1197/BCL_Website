<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Basket Club Limiense</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <!--Tailwind imports-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('app-assets/assets/css/main.css')}}"/>
    @yield('styles')
    <link rel="icon" href="/app-assets/images/bclimiense.png">
    <noscript>
        <link rel="stylesheet" href="{{asset ('app-assets/assets/css/noscript.css')}}'"/>
    </noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <a href="/" class="logo"><strong>Basket</strong> <span>Club Limiense</span></a>
        <a href="/" class="border-none"><img class="w-1/3" src="/app-assets/images/logo200px.png"></a>
        <nav>
            <a href="{{ url()->previous() }}" class="prev mt-1 border-none ">Voltar Atrás</a>
        </nav>
    </header>


    @yield('content')

<!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <ul class="icons">
                <li><a href="https://www.facebook.com/basketclublimiense" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.instagram.com/limiense/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Basket Club Limiense 2021</li>
                <li>Template do Website retirado de: <a href="https://html5up.net">HTML5 UP</a></li>
                <li>Site desenvolvido por:<a href="https://github.com/nuno1197" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
            </ul>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="{{asset('app-assets/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('app-assets/assets/js/jquery.scrolly.min.js')}}"></script>
<script src="{{asset('app-assets/assets/js/jquery.scrollex.min.js')}}"></script>
<script src="{{asset('app-assets/assets/js/browser.min.js')}}"></script>
<script src="{{asset('app-assets/assets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('app-assets/assets/js/util.js')}}"></script>
<script src="{{asset('app-assets/assets/js/main.js')}}"></script>

</body>
</html>
