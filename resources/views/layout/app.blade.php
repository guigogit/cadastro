<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>Cadastro de Produtos</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            body {
                padding: 20px;
            }
            .navbar {
                margin-bottom: 20px;
            }
        </style>
    </head>
<body>
    <div class="container">
        @component('componente_navbar', [ "current" => $current ])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>

    <script src="{{ asset('resources/js/app.js')}}" type="text/javascript"></script>

    @hasSection('javascript')
        @yield('javascript')
    @endif
</body>
</html>
