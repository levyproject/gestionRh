<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\salarie;

class SalarieController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = salarie::all();

        return view('salarie_index', compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('salarie_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'salarie_nom'=>'required',
        //     'salarie_prenom'=>'required',
        //     'salarie_sexe'=> 'required',
        //     'salarie_date_naissance' => 'required',
        //     'salarie_id_niveau' => 'required',
        //     'salarie_id_suivi' => 'required'
        //   ]);
          $salarie = new salarie([
            'nom'=> $request->get('salarie_nom'),
            'prenom'=> $request->get('salarie_prenom'),
            'sexe'=> $request->get('salarie_sexe'),
            'date_naissance' => $request->get('salarie_date_naissance'),
            'id_niveau' => $request->get('salarie_id_niveau'),
            'id_suivi' => $request->get('salarie_id_suivi')
          ]);
          $salarie->save();
          return redirect('/salarie')->with('Success', 'La valeur a été ajouté');
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
        $salarie = salarie::find($id_salarie);

        return view('salarie_edit', compact('salarie'));
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
        $salarie = salarie::find($id_salarie);
        $salarie->nom = $request->get('salarie_nom');
        $salarie->prenom = $request->get('salarie_prenom');
        $salarie->sexe = $request->get('salarie_sexe');
        $salarie->date_naissance = $request->get('salarie_date_naissance');
        $salarie->id_niveau = $request->get('salarie_id_niveau');
        $salarie->id_suivi = $request->get('salarie_id_suivi');
        $share->save();
  
        return redirect('/salarie')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_salarie)
    {
        $salarie = salarie::find($id_salarie);
        dd($salarie);
        var_dump($salarie);
        $salarie->delete();

        return redirect('/salarie')->with('success', 'Le salarié a été correctement supprimé');
    }
}
