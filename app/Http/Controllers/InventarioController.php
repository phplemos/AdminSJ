<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventarioRequest;
use App\Models\Inventario;
use App\Models\Item;
use App\Models\Setor;
use Illuminate\Http\Request;
use Throwable;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setor = new Setor;
        if ($setor->all()) {
            $lista = $setor->all();
            $inventario = new Inventario;
            $inventarios = $inventario->all();
            return view('layouts.inventario.lista', compact('lista', 'inventarios',));
        } else {
            $setor->create(['nome_setor' => 'Administrativo']);
            $lista = $setor->all();
            return redirect('/inventario', '302');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InventarioRequest $request)
    {

        try {
            $fk_setor = $request->fk_setor;
            $inventario = new Inventario;
            $inventario->create(['fk_setor' => strval($fk_setor)]);

            return view('layouts.inventario.novo', ['fk_inventario' => $inventario->all()]);
        } catch (Throwable $e) {
            report($e);
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventario = new Inventario;
        $inventario->create(['fk_setor' => $id]);

        return view('layouts.inventario.novo', ['fk_inventario' => $inventario->get('id')]);
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
