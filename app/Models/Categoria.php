<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Setor;
class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_categoria', 'descricao_categoria','fk_setor'
    ];
    public function setor(){
        return $this->belongsTo(Setor::class,'fk_setor');
    }
}
