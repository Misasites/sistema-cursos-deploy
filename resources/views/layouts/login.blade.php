<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"--}}
{{--          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">--}}

    <link id="themeLink" href="https://bootswatch.com/5/sketchy/bootstrap.min.css" rel="stylesheet">
    <title>Sistema - Login</title>
</head>
<!--Cor de Tema card  -->
<body class="bg-primary">

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">

                    @yield('content')

                </div>
            </div>
        </main>
    </div>
</div>

</body>

</html>
