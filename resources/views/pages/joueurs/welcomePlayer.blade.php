@extends('template.templatePlayer')

@section('content')
    
    <div class="container d-flex flex-column my-5">
        <h1 class="text-center text-danger">Bienvenue sur Volleyball planner</h1>
        <h2 class="text-center text-white my-4">Déplacez vous dans l'espace joueur depuis la barre de navigation</h2>
        <img src="{{asset('img/terrain.png')}}" alt="">
    </div>
@endsection