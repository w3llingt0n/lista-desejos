<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Lista de Desejos</title>
</head>
<body>
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo">Lista de Desejos</a>
            </div>
        </div>
    </nav>
    {{--Conteudo Principal--}}
    <div class="container">
        @yield('main-content')
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        @if (session('success'))
            M.toast({html: "{{session('success')}}"});
        @endif
    </script>
</body>
</html>
