<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Categoria;
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
        return view('pages.inventario.inventario');
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
     * @param  \Illuminate\Http\Request\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
                $item = new Item;
                $fkinventario = $request->fk_inventario;
                $fkcategoria = $request->fk_categoria;
                $nome = $request->nome_item;
                $descricao =  $request->descricao_item;
                $quantidade = $request->quantidade_item;
                $img = $request->img_item;
                $data = [
                    'nome_item' => $nome,
                    'descricao_item' => $descricao,
                    'quantidade_item' => $quantidade,
                    'img_item' =>$img,
                    'fk_inventario' => $fkinventario,
                    'fk_categoria' => $fkcategoria ];
                $item->create($data);
            return redirect('inventario/'.$fkinventario)->with('message','Cadastrado com sucesso!');
        }
        catch (Throwable $e){
            return redirect('inventario/'.$fkinventario)->with('message','Algo deu errado! Verifique se preencheu corretamente o formulário.');
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
