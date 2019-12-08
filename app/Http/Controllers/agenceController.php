<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Agence;

class agenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agences = Agence::orderby('created_at','desc')->paginate(5);
        return view('agences.index')->with('ttesAgences',$agences);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('agences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //Les noms des champs dans la base sont :
        /*  id
            created_at
            updated_at
            nom
            Responsable
            mobile
            telFixe
            email
            logo
            adresse	    */

            $this->validate($request,[
                'nom' => 'required',
                'responsable' => 'required',
                'mobile' => 'required',
                'email' => 'required',
                'logo' =>'image|nullable|max:30.000])'
            ]);
            if($request->hasFile('logo'))
            {
                $fichComplet = $request->file('logo')->getClientOriginalName ();
                $nomFich = pathinfo($fichComplet, PATHINFO_FILENAME );
                $extension  = $request->file('logo')->getClientOriginalExtension ();
                $fich = $nomFich.'-'.time ().'.'.$extension;
                $chemin = $request->file('logo')->storeAs('public/agences',$fich);
            }
            else
            {
                $fich = 'agence-logo.png';
            }
            $agence = new Agence;
            $agence->nom = $request->input('nom');
            $agence->Responsable = $request->input('responsable');
            $agence->mobile = $request->input('mobile');
            $agence->telFixe = $request->input('telfixe');
            $agence->email = $request->input('email');
            $agence->logo = $fich;
            $agence->adresse = $request->input('adresse');
            $agence->save();
            /*$notification = array(
                'message' => 'agence ajouté avec succès!',
                'alert-type' => 'success'
            );

            return redirect('agences')->with($notification);*/
            //$msg = 'Agence ajoutée avec succès';
            return redirect('agences');//->with('success','msg');
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
        $agence = Agence::find($id);
        return view('agences.edit')->with('uneAgence',$agence);
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
            'responsable' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'logo' =>'image|nullable|max:30.000])'
            ]);
            if($request->hasFile('logo'))
            {
                $fichComplet = $request->file('logo')->getClientOriginalName ();
                $nomFich = pathinfo($fichComplet, PATHINFO_FILENAME );
                $extension  = $request->file('logo')->getClientOriginalExtension ();
                $fich = $nomFich.'-'.time ().'.'.$extension;
                $chemin = $request->file('logo')->storeAs('public/agences',$fich);
            }
            else
            {
                $fich = $request->input('cachenomlogoagence');
            }

        $agence = Agence::find($id);
        $agence->nom = $request->input('nom');
        $agence->Responsable = $request->input('responsable');
        $agence->mobile = $request->input('mobile');
        $agence->telFixe = $request->input('telfixe');
        $agence->email = $request->input('email');
        $agence->logo = $fich;
        $agence->adresse = $request->input('adresse');
        $agence->save();

        return redirect('agences');//->with('success','Agence modifiée avec succès');

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
        $agence = Agence::find($id);
        $agence->delete();
        return redirect('agences');//->with('success','Agence supprimée !');

    }
}
