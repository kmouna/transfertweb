<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Chauffeur;
use App\TransfertIntermediaire;
use App\Transfert;
class transfertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Jointure pour avoir le nom du chauffeur
        $tsTransferts = DB::table('transferts')
        ->join('chauffeurs', 'transferts.id_chauffeur', '=', 'chauffeurs.id')
        ->select('transferts.*', 'chauffeurs.nom','chauffeurs.prenom')
        ->orderby('date','desc')
        ->get();
        //->paginate(5);


        return view('transferts.index',compact('tsTransferts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
        /*$tsTransEnAttente = TransfertIntermediaire::where('etat','=','En attente')
        ->orderby('date_trans','desc')
        ->orderby('id_vol')
        ->orderby('origine')
        ->get();*/

        $tschauffeurs = Chauffeur::all()->pluck('np_chauffeur','id');
        // $transfert = new Transfert();
        // //$transfert->id_chauffeur =0;
        // $transfert->save();
        // $id_transfert = $transfert->id;
        return view('transferts.create',compact('tschauffeurs'));//,'tsTransEnAttente'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // les champs dans la base sont :
        // id created_at updated_at id_chauffeur origine date heure_d heure_a retarde nbpersonnes

        $this->validate($request,[
            'id_chauffeur' => 'required',
            'origine' => 'required',
            'date' => 'required',
            'heure_d' => 'required',
        ]);

        $transfert = new Transfert;
        $transfert->id_chauffeur = $request->input('id_chauffeur');
        $transfert->origine = $request->input('origine');
        $dateformatee= date('Y-m-d',strtotime($request->input('date')));//->format('Y-m-d');
        $transfert->date = $dateformatee;
        $transfert->heure_d = $request->input('heure_d');
        $transfert->heure_a = $request->input('heure_a');
        $transfert->retarde = 0;
        $transfert->nbpersonnes = $request->input('nbpersonnes');
        $transfert->save();

        return redirect('transferts');
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
        $leTransfert = Transfert::find($id);
        $origin = $leTransfert->origine;

        $tsTransfertsOrigineEnAttente = DB::table('transfert_intermediaires')
        ->where('origine','=',$origin)
        ->where ('etat','=','En attente')
        ->orderby('date_trans','desc')
        ->orderby('id_vol')
        ->get();


        //var_dump(count($tsTransfertsOrigine));
        //Recherche du nom et prenom chauffeur
        $leChauffeur = Chauffeur::where('id','=',$leTransfert->id_chauffeur)->get()->first();;
       // var_dump($leChauffeur);
       $ttesLignes = TransfertIntermediaire::where('id_transfert','=',$id)
       ->orderby('date_trans','desc')
       ->orderby('id_vol')
       ->get();
        return view('transferts.show',compact('leTransfert','tsTransfertsOrigineEnAttente','leChauffeur','ttesLignes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leTransfert = Transfert::find($id);
        //
        return view('transferts.retard',compact('leTransfert'));
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
        $trans =  Transfert::find($id);
        $trans->retarde = 1;
        $trans->save();
        $tsSesTransInters = TransfertIntermediaire::where('id_transfert','=',$id)->get();
        if($tsSesTransInters!=null)
        {
            foreach($tsSesTransInters as $unTrans)
            {
            $unTrans->heure_d_retard = 1;
            $unTrans->save();
            }
        }

       return redirect('transferts');
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
        //var_dump($id);
        $Asupp =  Transfert::find($id);
        $tsSesTransInters = TransfertIntermediaire::where('id_transfert','=',$id)->get();
        if($tsSesTransInters!=null)
        {
            foreach($tsSesTransInters as $unTrans)
            {
            $unTrans->id_transfert = 0;
            $unTrans->heure_d = 0;
            $unTrans->heure_a = 0;
            $unTrans->heure_d_retard = 0;
            $unTrans->heure_a_retard = 0;
            $unTrans->etat = 'En attente';
            $unTrans->save();
            }
        }
        $Asupp->delete();
        return redirect('transferts');
    }
}
