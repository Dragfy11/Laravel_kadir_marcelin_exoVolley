@extends('template.templateCoach')

@section('content')
<div class="container">
    <div class="text-center">

        <h1 class="titre pb-5 text-danger pt-5" style="font-size: 70px">Dashboard</h1>
    
        <div class=" text-white my-3">
            
            <h1 class="titre2 pb-5 pt-5"> Equipe remplie au hasard</h1>
    
            @foreach ($teamHasard as $item)
                @if ($item->nombres==$item->membres)       
                    <h5>{{$item->equipe}}</h5>      
                @endif    
            @endforeach
        </div>
        
        <div class="text-white my-3">
         
                <h1 class="titre2 pb-5 pt-5">4 joueurs sans equipe au hasard</h1>
        
                @foreach ($teamHasardJ as $elem)
                    <h5 class="text-center">{{$elem->nom}}</h5>
                @endforeach
      
        </div>
    
        <div class="text-white text-center">
         
            <h1 class="titre2 pb-5 pt-5">4 joueurs avec equipe au hasard</h1>
    
            @foreach ($teamHasardE as $elem)
                <h5 class="text-center">{{$elem->nom}}</h5>
            @endforeach
  
        </div>
        
        <div class="text-white text-center">
         
            <h1 class="titre2 pb-5 pt-5">2 équipes non remplies au hasard</h1>
    
            @foreach ($teamHasardNR as $elem)
                <h5 class="text-center">{{$elem->equipe}}</h5>
            @endforeach
  
        </div>
    
        <div class="text-white text-center">
         
            <h1 class="titre2 pb-5 pt-5"> Pays EUROPE</h1>
        
            @foreach ($equipe as $elem)
                @if($elem->pays->continent=="Europe")
                    <h5 class="text-center">{{$elem->equipe}}</h5>
                @endif
                    
            @endforeach
  
        </div>
        
        <div class="text-white text-center">
         
            <h1 class="titre2 pb-5 pt-5"> Pays HORS EUROPE</h1>
    
    
            @foreach ($equipe as $elem)
                @if($elem->pays->continent!="Europe")
                    <h5 class="text-center">{{$elem->equipe}}</h5>
                @endif
            @endforeach
  
        </div>
    
        <div class="text-white text-center">
         
            <h1 class="titre2 pb-5 pt-5"> les joueurs qui représentent leur pays </h1>
    
            @foreach ($profil as $item)
                    @if($item->origin==$item->equipe->pays->pays)
                        <h5 class="text-center">{{$item->nom}}</h5>
                    @endif

            @endforeach
  
        </div>
    
        <div class="text-white text-center">
         
            <h1 class="titre2 pb-5 pt-5"> 5 joueuses au hasard qui ont une équipe ! </h1>
    
            @foreach ($fille as $elem)
                <h5 class="text-center">{{$elem->nom}}</h5>
            @endforeach
  
        </div>

        <div class="text-white text-center">
         
            <h1 class="titre2 pb-5 pt-5"> 5 joueurs au hasard et qui ont une équipe ! </h1>
    
                @foreach ($homme as $elem)
                    <h5 class="text-center">{{$elem->nom}}</h5>
                @endforeach
  
        </div>
    </div>

@endsection