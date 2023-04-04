<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href='https://fonts.googleapis.com/css?family=Ribeye Marrow' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Bungee Inline' rel='stylesheet'>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        


    <style>
        body {
            font-family: 'Nunito';
            background: #f7fafc;
        }
    </style>
</head>
<body style="background-color:rgba(255, 255, 204, 0.9)">
    <div class="container-fluid fixed-top p-4" style="background-color:rgba(255, 255, 204, 0.9)">
        <div class="col-12">
            <div class="d-flex justify-content-end">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-muted" style="font-weight:bold; font-size:20px; font-family:'Ribeye Marrow'">Recepti</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted" style="font-weight:bold; font-size:20px; font-family:'Ribeye Marrow'">Prijava</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-muted" style="font-weight:bold; font-size:20px; font-family:'Ribeye Marrow'">Registriraj se</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 pt-5 px-5" style="background-color:rgba(255, 255, 204, 0.9)">
        <div class="row justify-content-center px-4">
            <div class="col-md-12 col-lg-9">
                

                <div class="card shadow-sm" style="background-image:url(/storage/cover_images/hladnjak.png); background-repeat:no-repeat; width:90%; height:150%;border-radius:25px; background-color:rgba(255, 204, 0, 0.5)">
                    <div style="margin-left:48%;margin-top:10%; width:50%; border:2px dashed black; border-radius:25px; text-align:center;background-color:rgba(255, 255, 204, 0.9);">
                        <h1 style="font-weight:bold; font-size:50px; font-family:'Ribeye Marrow'"> Dobrodošli u Virtualni hladnjak,</h1>
                         <p style="font-weight:bold; font-size:20px; font-family:'Open Sans'"> novi način vođenja evidencije namirnica u kući te virtualni pomoćnik s kojim ćete izbjeći svakodnevno mozganje što biste danas mogli napraviti za jest.</p>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
