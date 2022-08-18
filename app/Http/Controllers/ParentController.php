<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent = Parents::all();

        return [
            'parent' => $parent 
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required|max:100',
            'prenom' =>'required|max:200',
            'email' => 'required',
            'contact'=> 'required',
            'code_parent' => 'required'

        ]);
    
            $parent  = new Parents;
            $parent->nom  = $request->nom;
            $parent->prenom  = $request->prenom;
            $parent->genre  = $request->genre;
            $parent->email  = $request->email;
            $parent->contact  = $request->contact;
            $parent->code_parent  = $request->code_parent;
    
            $parent->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function show(Parents $id)
    {
        $parent = Parents::find($id);

        return [
            'parent' => $parent
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function edit(Parents $parents)
    {
        //
    }



    public function deleteParents($id){
        $parents = Parents::find($id);

        $parents->delete();
    }


    
    public function updateParents(Request $request, $id){
        $parent = Parents::find($id);
        $parent->nom  = $request->nom;
        $parent->prenom  = $request->prenom;
        $parent->genre  = $request->genre;
        $parent->email  = $request->email;
        $parent->contact  = $request->contact;
        $parent->code_parent  = $request->code_parent;

        $parent->update();
    }
}
