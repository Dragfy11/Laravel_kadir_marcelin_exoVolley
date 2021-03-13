<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Voleyball Manager</title>
</head>

<body class="bodyImg" style="background-image: linear-gradient(rgba(32, 32, 32, 0.5), rgba(32, 32, 32, 0.5)), url(./img/terrain.png)">
<section class="banner d-flex align-items-center flex-column"  >
  <div class="bannerTitle">
    <h1 class="text-danger">VolleyBall Manager</h1>
  </div>

  <div class="bannerContent my-5">
    <h2 class="text-white">Créez, modifiez et supprimez vos équipes de volleyball</h2>
  </div>
</section>

<section class="my-5">
  <p class="p-3 rem2 radiusRL bgBtn text-white w20">
    Vous êtes:
  </p>
  <div class="text-center my-5">
    <div class="d-flex justify-content-around">
      <button class="btn bgBtn w10 rem15 text-white" data-toggle="collapse" href="#multiCollapseExample1" type="button" aria-expanded="false" aria-controls="multiCollapseExample1">Joueur</a>
      <button class="btn bgBtn w10 rem15 text-white" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Coach</button>
    </div>
    <div class="row m-0">
      <div class="col-6">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card card-body bg-light">
          <a  href="/joueur" class="text-decoration-none d-flex align-items-center justify-content-center">
              Cliquez ici pour accéder a l'espace joueur
          </a>
      </div>
          </div>
        </div>
      <div class="col-6">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card card-body bg-light">
            <a href="/coach" class="text-decoration-none d-flex align-items-center justify-content-center">
                Cliquez ici pour accéder a l'espace coach
            </a>          
          </div>
        </div>
      </div>
    </div>

</section>

<section>
  <div class="row my-5">

    <div class="col-6 d-flex align-items-center justify-content-center">
      <div class="col">
          
    </div>
    <div class="col-6 d-flex align-items-center justify-content-center">
      <div class="col">

      </div>
    </div>
  </div>
</section>
    
    @include('components.footer')


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>