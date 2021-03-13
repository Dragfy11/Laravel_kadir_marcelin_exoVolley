@extends('template.templatePlayer')

@section('content')


    <h1 class="titre text-danger text-center">{{$equipes->equipe}}</h1>
    <div class="row centrer">

        <div class="col-10 ">
            <div class="affichageEquipe my-5">

                <div class="terrain" header='100px' style="background-image: url('{{asset('img/terrain.png')}}')">
                    @foreach ($profil as $item)
                        @if($item->equipes_id === $equipes->id)

                            <div class="carte-liste carte{{$counter}}" style="background-image: url('{{asset('img/carte.png')}}')">
                                <img class="contact-liste" src="{{asset('storage/images/' . $item->photo)}}" alt="">
                            </div>
                            <p hidden>{{$counter++}}</p>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
        <div class="col-2">

            


            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
                Plus d'informations
            </button>

            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Liste des Joueurs</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table my-3 table-dark container text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">nom</th>
                                        <th scope="col">prenom</th>
                                        <th scope="col">poste</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profil as $item)
                                        @if($item->equipes_id === $equipes->id)
                                            <tr>
                                                <td>{{$item->nom}}</td>
                                                <td>{{$item->prenom}}</td>
                                                <td>{{$item->poste->poste}}</td>
                                            </tr>                
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
        
                            <h2 class="mt-5 text-center">Possibilité de joueurs dans l'equipe : {{$equipes->nombres}}</h2>
                            <h3 class="mb-5 text-center">Vous etes a {{$equipes->membres}} membres !</h3>
        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

    <!-- Modal -->
    </div>






@endsection 