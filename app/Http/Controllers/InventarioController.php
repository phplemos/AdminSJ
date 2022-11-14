<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventarioRequest;
use App\Http\Requests\ItemRequest;
use App\Models\Categoria;
use App\Models\Inventario;
use App\Models\Item;
use App\Models\Setor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;
use Nette\Utils\Json;
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
        try {
            $setor = new Setor;
            $setores = $setor->all();
            $inventario = new Inventario;
            // dd($setores);
            $inventarios = $inventario->all();
            return view('pages.inventario.lista', compact('setores', 'inventarios',));
        } catch (Throwable $error) {
            dd($error);
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
    public function store(Request $request)
    {
        try {
            $fk_setor = $request->fk_setor;
            $inventario = new Inventario;
            $novo_inventario = $inventario->create(['fk_setor' => strval($fk_setor)]);

            return redirect()->route('inventario.show',['inventario' => $novo_inventario->id])->with('message','Inventario cadastrado com sucesso');
        } catch (Throwable $e) {
            report($e);
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $id)
    {

        try {
            $inventario = Inventario::find($id->inventario);
            if(isset($inventario)){
                $item = DB::table('items')->where('fk_inventario', '=',$id->inventario)->get();
                $categorias = Categoria::all();
                return view('pages.inventario.inventario', ['fk_inventario' => $id->inventario, 'itens' => $item, 'categorias' =>$categorias]);
            }else{
                return redirect('/inventario','302')->with('message', 'Inventario Não existe!');
            }
        } catch (Throwable $e) {
            dd($e);
        }
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
