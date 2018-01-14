<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Http\Requests\formationrequest;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Index : Lister tous les éléments
    public function index()
    {
        $f=Formation::paginate(5);
        return view ('formation.index',['slim'=>$f]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Create : Afficher le formulaire de création
    public function create()
    {
        return view('formation.creationForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Store : Enregistrer les éléments du formulaire dans la BD
    public function store(formationrequest $request)
    {
        $xyz=new Formation();
        $xyz->nom = $request->input('nom');
        $xyz->description = $request->input('description');
        $xyz->save();
        return redirect('/formation');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fs=Formation::find($id);
        return view ('formation.show',['fff'=>$fs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Edit : récupérer des données et les mettres dans le formulaire.
    public function edit($id)
    {
       $xyz=Formation::find($id);
       return view ('formation.edit',['abc'=>$xyz]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //
    public function update(formationrequest $request, $id)
    {
        $mz=Formation::find($id);
        $mz->nom = $request->input('nom');
        $mz->description = $request->input('description');
        $mz->save();
        return redirect('/formation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Suprimer des éléments de la base.
    public function destroy($id)
    {
        $xml=Formation::find($id);
        $xml->delete();
        return redirect('/formation');
    }

    
}