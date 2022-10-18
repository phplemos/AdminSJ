<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Inventario;
class Item extends Model
{
    use HasFactory;
    protected $fillable = ['nome_item','descricao_item','quantidade_item',
    'img_item','fk_categoria','fk_inventario'];
    public function categoria(){
        return $this->belongsTo(Categoria::class,'fk_categoria');
    }
    public function inventario(){
        return $this->belongsToMany(Inventario::class,'fk_inventario');
    }
}
