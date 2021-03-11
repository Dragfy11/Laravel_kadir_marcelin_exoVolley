@extends('template.templateCoach')

@section('content')
<div class="container">
    <h1 class="titre text-center text-danger">Les equipes</h1>

    <h1 class="titre text-center">Choisissez votre equipe</h1>

    <div class="affichageEquipe row my-5">

            <div class="bordure">
                @foreach ($equipes as $item)
                    <div class="row my-3">
                        <div class="col-6 dddd">
                            <label class="form-check-label" for="exampleRadios1">
                                {{$item->equipe}}
                            </label>
                        </div>
                        <div class="col-6">
                            <a href="/show-equipe/{{$item->id}}">            
                                <button class="btn btn-primary"> Afficher equipe</button>
                            </a>
                        </div>

                    </div>
    
                 @endforeach
            </div>
            
          </div>

</div>
@endsection 