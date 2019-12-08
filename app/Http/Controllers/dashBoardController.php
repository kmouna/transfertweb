<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chauffeur;
use App\Transfert;
use App\TransfertIntermediaire;

class dashBoardController extends Controller
{
    public function index()
    {
        $nbtrans = Transfert::count();
        $aeros   = Transfert::where('origine','Aéroport')->count();
        $hots    = Transfert::where('origine','Hôtel')->count();
        $retarde = Transfert::where('retarde','1')->count();
        $aeros_P = number_format(($aeros/$nbtrans)*100,2);
        $hots_P  = number_format(($hots/$nbtrans)*100,2);
        $retarde_P = number_format(($retarde/$nbtrans)*100,2);
        $chauffs = Chauffeur::get();
        $nbtransinter = TransfertIntermediaire::count();
        $attente      = TransfertIntermediaire::where('etat','En attente')->count();
        $planifie     = TransfertIntermediaire::where('etat','Planifiée')->count();
        $realise      = TransfertIntermediaire::where('etat','Réalisée')->count();
        $attente_P    = number_format(($attente/$nbtransinter)*100,2);
        $planifie_P   = number_format(($planifie/$nbtransinter)*100,2);
        $realise_P    = number_format(($realise/$nbtransinter)*100,2);

        return view('index',compact('nbtrans','aeros_P','hots_P',
        'retarde_P','aeros','hots','retarde','attente_P','planifie_P','realise_P','chauffs'));
    }

}
