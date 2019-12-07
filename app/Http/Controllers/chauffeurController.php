<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chauffeur;

class chauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chauffeurs = Chauffeur::orderby('created_at','desc')->paginate(5);
        return view('chauffeurs.index')->with('tsChauffeurs',$chauffeurs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('chauffeurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Les noms des champs dans la base sont :
        /*  id
            created_at
            updated_at
            nom
            prenom
            datenais
            adresse
            telfixe
            mobile
            email
            photo
            note    */

        $this->validate($request,[
            'nom' => 'required',
            'prenom' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'photo' =>'image|nullable|max:10.000])'
        ]);

        if($request->hasFile('photo'))
        {
            $fichComplet = $request->file('photo')->getClientOriginalName ();
            $nomFich = pathinfo($fichComplet, PATHINFO_FILENAME );
            $extension  = $request->file('photo')->getClientOriginalExtension ();
            $fich = $nomFich.'-'.time ().'.'.$extension;
            $chemin = $request->file('photo')->storeAs('public/chauffeurs',$fich);
        }
        else
        {
            $fich = 'avatar.png';
        }

        $chauffeur = new Chauffeur;
        $chauffeur->nom = $request->input('nom');
        $chauffeur->prenom = $request->input('prenom');
        $chauffeur->datenais = $request->input('datenais');
        $chauffeur->adresse = $request->input('adresse');
        $chauffeur->telfixe = 0;
        $chauffeur->mobile = $request->input('mobile');
        $chauffeur->email = $request->input('email');
        $chauffeur->motpasse = $request->input('motpasse');
        $chauffeur->photo = $fich;
        $chauffeur->note = 0;
        $chauffeur->save();
        /*$notification = array(
            'message' => 'chauffeur ajouté avec succès!',
            'alert-type' => 'success'
        );

        return redirect('chauffeurs')->with($notification);*/
       $msg = 'chauffeur ajouté avec succès';
       return redirect('chauffeurs');//->with('success','msg');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $chauffeur = Chauffeur::find($id);
        return view('chauffeurs.edit')->with('unChauffeur',$chauffeur);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'nom' => 'required',
            'prenom' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'motpasse' => 'required',
            'photo' =>'image|nullable|max:10.000])'
        ]);

        if($request->hasFile('photo'))
        {
            $fichComplet = $request->file('photo')->getClientOriginalName ();
            $nomFich = pathinfo($fichComplet, PATHINFO_FILENAME );
            $extension  = $request->file('photo')->getClientOriginalExtension ();
            $fich = $nomFich.'-'.time ().'.'.$extension;
            $chemin = $request->file('photo')->storeAs('public/chauffeurs',$fich);
        }
        else
        {
            $fich = $request->input('cachenomphoto');
        }

        $chauffeur = Chauffeur::find($id);
        $chauffeur->nom = $request->input('nom');
        $chauffeur->prenom = $request->input('prenom');
        $chauffeur->datenais = $request->input('datenais');
        $chauffeur->adresse = $request->input('adresse');
        $chauffeur->telfixe = 0;
        $chauffeur->mobile = $request->input('mobile');
        $chauffeur->email = $request->input('email');
        $chauffeur->motpasse = $request->input('motpasse');
        $chauffeur->photo = $fich;//$request->input('photo');
        $chauffeur->note = 0;
        $chauffeur->save();

        return redirect('chauffeurs');//->with('success','chauffeur modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $chauffeur = Chauffeur::find($id);
        $chauffeur->delete();
        return redirect('chauffeurs');//->with('success','Chauffeur supprimé !');

    }
}
