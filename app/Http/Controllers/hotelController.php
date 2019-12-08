<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class hotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hotels = Hotel::orderby('created_at','desc')->paginate(5);
        return view('hotels.index')->with('tsHotels',$hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hotels.create');
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
            responsable
            mobileresp
            telfixe
            lattitude
            longitude
            email
            logo
            adresse	    */

            $this->validate($request,[
                'nom' => 'required',
                'responsable' => 'required',
                'mobileresp' => 'required',
                'lattitude' => 'required',
                'longitude'  => 'required',
                'email' => 'required',
                'logo' =>'image|nullable|max:30.000])'
            ]);

            if($request->hasFile('logo'))
            {
                $fichComplet = $request->file('logo')->getClientOriginalName ();
                $nomFich = pathinfo($fichComplet, PATHINFO_FILENAME );
                $extension  = $request->file('logo')->getClientOriginalExtension ();
                $fich = $nomFich.'-'.time ().'.'.$extension;
                $chemin = $request->file('logo')->storeAs('public/hotels',$fich);
            }
            else
            {
                $fich = 'logo.png';
            }
            $hotel = new Hotel;
            $hotel->nom = $request->input('nom');
            $hotel->responsable = $request->input('responsable');
            $hotel->mobileresp = $request->input('mobileresp');
            $hotel->telfixe = $request->input('telfixe');
            $hotel->lattitude = $request->input('lattitude');
            $hotel->longitude = $request->input('longitude');
            $hotel->email = $request->input('email');
            $hotel->logo = $fich;//$request->input('logo');
            $hotel->adresse = $request->input('adresse');
            $hotel->save();
            /*$notification = array(
                'message' => 'hotel ajouté avec succès!',
                'alert-type' => 'success'
            );

            return redirect('hotels')->with($notification);*/
           //$msg = '>Hôtel ajouté avec succès';
            return redirect('hotels');//->with('success','msg');
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
        $hotel = Hotel::find($id);
        return view('hotels.edit')->with('unHotel',$hotel);
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
            'mobileresp' => 'required',
            'lattitude' => 'required',
            'longitude'  => 'required',
            'email' => 'required',
            'logo' =>'image|nullable|max:30.000])'
            ]);

            if($request->hasFile('logo'))
            {
                $fichComplet = $request->file('logo')->getClientOriginalName ();
                $nomFich = pathinfo($fichComplet, PATHINFO_FILENAME );
                $extension  = $request->file('logo')->getClientOriginalExtension ();
                $fich = $nomFich.'-'.time ().'.'.$extension;
                $chemin = $request->file('logo')->storeAs('public/hotels',$fich);
            }
            else
            {
                //conservé depuis l'ancienne valeur
                //dd($request->input('cachenomlogo'));
                $fich = $request->input('cachenomlogo');
            }

        $hotel = Hotel::find($id);
        $hotel->nom = $request->input('nom');
        $hotel->responsable = $request->input('responsable');
        $hotel->mobileresp = $request->input('mobileresp');
        $hotel->telfixe = $request->input('telfixe');
        $hotel->lattitude = $request->input('lattitude');
        $hotel->longitude = $request->input('longitude');
        $hotel->email = $request->input('email');
        $hotel->logo = $fich;
        $hotel->adresse = $request->input('adresse');
        $hotel->save();

        return redirect('hotels');//->with('success','hotel modifié avec succès');

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
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect('hotels');//->with('success','Hôtel supprimé !');

    }
}
