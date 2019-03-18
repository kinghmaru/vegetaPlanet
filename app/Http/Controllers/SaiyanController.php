<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saiyan;

class SaiyanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saiyans = Saiyan::latest()->paginate(5);
        return view('saiyan.index', compact('saiyans'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('saiyan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'powerLevel' => 'required',
            'description' => 'required'

        ]);

        Saiyan::create($request->all());
        return redirect()->route('saiyan.index')->with('success', 'Novo saiyajin criado com sucesso!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saiyan = Saiyan::find($id);
        return view('saiyan.show', compact('saiyan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saiyan = Saiyan::find($id);
        return view('saiyan.edit', compact('saiyan'));
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
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'powerLevel' => 'required',
            'description' => 'required'

        ]);
        $saiyan = Saiyan::find($id);
        $saiyan->name = $request->get('name');
        $saiyan->class = $request->get('class');
        $saiyan->powerLevel = $request->get('powerLevel');
        $saiyan->description = $request->get('description');
        $saiyan->save();
        return redirect()->route('saiyan.index')->with('success','Saiyajin atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $saiyan = Saiyan::find($id);
        $saiyan->delete();
        return redirect()->route('saiyan.index')->with('success', 'Saiyajin excluído com sucesso!');
    }
}
