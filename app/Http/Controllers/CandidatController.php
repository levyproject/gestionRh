<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\candidat;
use App\niveau_etude;

class CandidatController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidats = candidat::all();
        $niveau_etude = niveau_etude::all();

        return view('candidat/candidat_index', compact('candidats'), compact('niveau_etude'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //     $niveau_etude = niveau_etude::all();
    //     $suivi_salarie = suivi_salarie::all();

    //    return view('salarie/salarie_create', compact('niveau_etude'), compact('suivi_salarie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //   $salarie = new salarie([
        //     'nom'=> $request->get('salarie_nom'),
        //     'prenom'=> $request->get('salarie_prenom'),
        //     'sexe'=> $request->get('salarie_sexe'),
        //     'date_naissance' => $request->get('salarie_date_naissance'),
        //     'id_niveau' => $request->get('salarie_id_niveau'),
        //     'id_suivi' => $request->get('salarie_id_suivi')
        //   ]);
        //   $salarie->save();
        //   return redirect('/salarie')->with('Success', 'La valeur a été ajouté');
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
    public function edit($id_salarie)
    {
        // $salarie = salarie::find($id_salarie);
        // $niveau_etudes = niveau_etude::all();
        // $suivi_salaries = suivi_salarie::all();

        // // $test = compact($suivi_salaries);



        // return view('salarie/salarie_edit', compact('salarie'), compact('niveau_etudes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_salarie)
    {
        // $salarie = salarie::find($id_salarie);
        // $salarie->nom = $request->get('salarie_nom');
        // $salarie->prenom = $request->get('salarie_prenom');
        // $salarie->sexe = $request->get('salarie_sexe');
        // $salarie->date_naissance = $request->get('salarie_date_naissance');
        // $salarie->id_niveau = $request->get('salarie_id_niveau');
        // $salarie->id_suivi = $request->get('salarie_id_suivi');
        // $salarie->save();
  
        // return redirect('/salarie')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_salarie)
    {
        // $salarie = salarie::find($id_salarie);
        // $salarie->delete();

        // DB::table('salarie')->where('id_salarie', $id_salarie)->delete();

        // return redirect('/')->with('success', 'Le salarié a été correctement supprimé');
    }
}
