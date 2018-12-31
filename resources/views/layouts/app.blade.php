<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Han Khuu')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:Raleway:100,300,400,600,700,800,900" rel="stylesheet" type="text/css">

        <!-- CSS -->
        <link rel="stylesheet" href="/css/style.css" type="text/css">
        <link type="text/css" rel="stylesheet" href="css/lightgallery.css"/>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    </head>

    <body>
        <header class="nav-down">
            <ul id="top-menu">
                <li id="home" class="active"><a href="/#home">Home</a></li>
                <li id="projects"><a href="/#projects">Projects</a></li>
                <li id="photos"><a href="/#photos">Photography</a></li>
                <li id="about"><a href="/#about">Bio</a></li>
                <li id="contact"><a href="/#contact">Contact</a></li>
            </ul>

            <div class="avatar">HK</div>
        </header>

        @yield('content')

        <footer>

        </footer>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

        <!-- lightGallery -->
        <script src="js/lightgallery.min.js"></script>

        <script type="text/javascript" src="{{ mix('dist/app.js') }}"></script>
    </body>
</html>
