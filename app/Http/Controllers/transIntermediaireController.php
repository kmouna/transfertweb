<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TransfertIntermediaire;
use App\Agence;
use App\Hotel;
use App\Transfert;

class transIntermediaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       /* $tsTransIntEnAttente = TransfertIntermediaire::where('etat','=','En attente')
        ->orderby('date_trans','desc')
        ->orderby('id_vol')
        ->orderby('origine')
        ->get();
        return view('transfertsIntermediaires.index')->with('ttesDemandes', $tsTransIntEnAttente);*/
    }
    public function indexetats($status)
    {
        if($status == 1){
            $etat = 'En attente';
        }
        elseif ($status == 2) {
            $etat = 'Planifiée';
        }
        elseif ($status == 3) {
            $etat = 'Réalisée';
        }

        $tstransSelonetats = TransfertIntermediaire::where('etat','=',$etat)
        ->orderby('date_trans','desc')
        ->orderby('id_vol')
        ->orderby('origine')
        ->get();
        return view('transfertsIntermediaires.indexetats',compact('tstransSelonetats','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ttesAgences = Agence::all()->pluck('nom','nom');
        $tsHotels = Hotel::all()->pluck('nom','nom');
        return view('transfertsIntermediaires.create',compact('ttesAgences','tsHotels'));
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
        /*  	id	created_at	updated_at
        id_transfert	id_vol	id_hotel	id_agence  origine
        heure_d	heure_a	heure_d_retard	heure_a_retard
        nbperso	etat */

         $this->validate($request,[
                'nbperso' => 'required',
            ]);

            $transIntermediaire = new TransfertIntermediaire;
            $transIntermediaire->id_transfert = 0;// Non encore affecté à un chauffeur
            $transIntermediaire->origine = $request->input('origine');
            $transIntermediaire->id_vol = $request->input('id_vol');
            $transIntermediaire->nom_hotel = $request->input('nom_hotel');
            $transIntermediaire->nom_agence = $request->input('nom_agence');

            $dateformatee= date('Y-m-d',strtotime($request->input('date_trans')));//->format('Y-m-d');
            $transIntermediaire->date_trans = $dateformatee;
            $transIntermediaire->heure_trans = $request->input('heure_trans');
            $transIntermediaire->heure_d = 0; // Non encore planifié
            $transIntermediaire->heure_a = 0; // Non encore planifié
            $transIntermediaire->heure_d_retard = 0;
            $transIntermediaire->heure_a_retard = 0;
            $transIntermediaire->nbperso = $request->input('nbperso');
            $transIntermediaire->etat = 'En attente';  // Nouveau
            $transIntermediaire->save();
            //$status = 1;
            return redirect('transfertsIntermediaires/1/indexetats');//->with('status',$status);
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

        ]);
        //var_dump($id);
        $transIntermediaire = TransfertIntermediaire::find($id);
        $transIntermediaire->id_transfert = $request->input('id_transfert_recup');// Recueilli de l'index et dans hidden
        $transIntermediaire->heure_d = $request->input('heure_d_modif'); // Planifié donc mise à jour
        $transIntermediaire->heure_a = $request->input('heure_a_modif'); // Planifié donc mise à jour
        $transIntermediaire->heure_d_retard = 0;
        $transIntermediaire->heure_a_retard = 0;
        //$transIntermediaire->nbperso = $request->input('nbperso');
        $transIntermediaire->etat = 'Planifiée';  // Mise à jour
        $transIntermediaire->save();

        $transfert = Transfert::find($transIntermediaire->id_transfert);
        $transfert->nbpersonnes = $request->input('cachenbpTotal');

        /*<!-- à corriger lors de la mise à jour : il vaut mieux qu'elle soit à part-->
        if($request->input('cachedepartTransglobal') != null){
            $transfert->heure_d = $request->input('cachedepartTransglobal');
        }
        if($request->input('cachearriveeTransglobal') != null){
            $transfert->heure_a = $request->input('cachearriveeTransglobal');
        }*/
        $transfert->save();

        return back();//'hellooo';
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
    }
}
