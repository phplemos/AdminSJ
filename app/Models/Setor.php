<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
class Setor extends Model
{
    use HasFactory;
    protected $fillable = ['nome_setor'];
    public function categoria(){
        return $this->hasMany(Categoria::class);
    }
}
