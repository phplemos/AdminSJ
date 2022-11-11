<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Throwable;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.inventario.novo');
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
        try{
            $cadastrar = new Item;
            $fkinventario = $request->fk_inventario;
            $fkcategoria = $request->fk_categoria;
            $nome = $request->nome_item;
            $descricao =  $request->descricao_item;
            $quantidade = $request->quantidade_item;
            $img = $request->img_item;

            $cadastrar->create([
                'nome_item' => $nome,
                'descricao_item' => $descricao,
                'quantidade_item' => $quantidade,
                'img_item' =>$img,
                'fk_inventario' => $fkinventario,
                'fk_categoria' => $fkcategoria]);
            return redirect("/inventario/{$fkinventario}",302,['message' => 'Item Cadastrados']);
            }
            catch (Throwable $e) {
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
