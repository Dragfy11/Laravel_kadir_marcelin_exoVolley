<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volleyball manager</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-dark">
    <section class=""> 
        <div class="row my-5 mx-0 px-0">
            <div class="col-4 mx-0 pl-0">
                <ul class="mx-0 pl-0 d-flex flex-column justify-content-around">
                    <li class="my-5 radiusRL bg-light p-3 bgBtn">
                        <a class="rem2 text-decoration-none text-white" href="/">Home</a>
                    </li>
                    <li class="my-5 radiusRL bg-light p-3 bgBtn">
                        <a class="rem2 text-decoration-none text-white" href="/equipe-coach">Créer une équipe</a> 
                    </li>
                    <li class="my-5 radiusRL bg-light p-3 bgBtn">    
                        <a class="rem2 text-decoration-none text-white" href="/liste-equipe-coach">Liste des joueurs</a>
                    </li>
                    <li class="my-5 radiusRL bg-light p-3 bgBtn">
                        <a class="rem2 text-decoration-none text-white" href="/dashboard-coach">Dashboard</a>
                    </li>
                </ul>
            </div>
            <div class="col-8 d-flex align-items-center justify-content-center">
                <img src="{{asset('img/coach.jpg')}}" class="w-75 h-100" alt="">
            </div>
        </div>
    </section>

    @include('components.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>
        
