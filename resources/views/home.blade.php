<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Voleyball Planner</title>
</head>
<body class="bg-dark">

  
    <h1 class="my-5 text-center text-white">Bienvenue sur VolleyBall Planner</h1>
    <h2 class="text-center text-white">Créez, modifiez et supprimez vos équipes de volleyball</h2>

    <div class="row my-5">

      <div class="col-6 d-flex align-items-center justify-content-center">
        <div class="col">
            <h3 class="text-white text-center">Joueur</h3>
            <a  href="/joueur">
                <img src="{{asset('img/player.jpg')}}" alt="" class="w-100 h-100">
            </a>
        </div>
      </div>
      <div class="col-6 d-flex align-items-center justify-content-center">
        <div class="col">
            <h3 class="text-white text-center">Coach</h3>
            <a href="/coach">
                <img src="{{asset('img/coach.jpg')}}" alt="" class=" w-100 h-100">
            </a>
        </div>
      </div>
    </div>
    test
    @include('components.footer')


<script src="{{asset('js/app.js')}}"></script>
</body>
</html>