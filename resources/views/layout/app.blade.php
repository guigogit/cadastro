<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>


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


    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>


    @hasSection('javascript')
        @yield('javascript')
    @endif
</body>
</html>
