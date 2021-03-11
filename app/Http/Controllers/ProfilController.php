<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Pays;
use App\Models\Poste;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile =  Profil::all();
        $team = Equipe::all();
        $posts =  Poste::all();
        $counter = 0;
        return view('pages.Player.equipePlayer', compact('counter','profile','team','posts'));
    }
    public function index2()
    {

        $profile =  Profil::all();
        $team = Equipe::all();
        $posts =  Poste::all();
        return view('pages.Player.listePlayer', compact('profile','team','posts'));
    }
    public function index3()
    {
        $profile =  Profil::all();
        $team = Equipe::all();
        $posts =  Poste::all();
        $counter = 0;
        return view('pages.Coach.listeJoueurCoach', compact('counter','profile','team','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pays = Pays::all();
        $team = Equipe::all();
        $posts = Poste::all();
        return view('pages.Player.createPlayer', compact('pays','team','posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateForm = $request->validate([
            "nom" => "string|required",
            "prenom" => "string|required",
            "age" => "string|required",
            "numeros" => "string|required",
            "email" => "required",
            "genre" => "required",
            "photo" => "required",
            "equipes_id" => "required",
            "poste_id" => "required",
        ]);
        $profile=new Profil;

        $profile->nom=$request->nom;
        $profile->prenom=$request->prenom;
        $profile->age=$request->age;
        $profile->numeros=$request->numeros;
        $profile->email=$request->email;
        $profile->genre=$request->genre;
        $profile->origin=$request->origin;
        $profile->photo=$request->file('photo')->hashName();
        $profile->equipes_id=$request->equipes_id;
        $profile->poste_id=$request->poste_id;
        
        if($request->equipes_id==$profile->equipes_id && $profile->equipe->membres<$profile->equipe->nombres){
            
        $profile->equipe->increment("membres", 1);
        $profile->save();
        $request->file('photo')->storePublicly('images','public');

        return redirect()->back();

        }else{

            return redirect()->back()->with('status', "L'équipe est au complet!")->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        $profile =  Profil::find($id);
        $team = Equipe::all();
        $posts =  Poste::all();

        return view('pages.Player.show.showPlayer', compact('profil','team','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        $profile =  Profil::find($id);
        $team = Equipe::all();
        $posts =  Poste::all();

        return view('pages.Player.editPlayer', compact('profil','team','posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        $validateForm = $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "age" => "required",
            "numeros" => "required",
            "email" => "required",
            "genre" => "required",
            "photo" => "required",
            "equipes_id" => "required",
            "poste_id" => "required",
        ]);

        $profile= Profil::find($id);

        $profile->nom=$request->nom;
        $profile->prenom=$request->prenom;
        $profile->age=$request->age;
        $profile->numeros=$request->numeros;
        $profile->email=$request->email;
        $profile->genre=$request->genre;
        $profile->origin=$request->origin;
        $profile->photo=$request->file('photo')->hashName();
        $profile->equipes_id=$request->equipes_id;
        $profile->poste_id=$request->poste_id;

        $profile->save();

        Storage::disk('public')->delete('images/' . $profile->photo);

        $request->file('photo')->storePublicly('images','public');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        $Profile = Profil::find($id);
        $Profile->equipe->decrement("membres", 1);
        $Profile->delete();
        
        Storage::disk('public')->delete('images/' . $Profile->photo);

        return redirect()->back();
    }
}
