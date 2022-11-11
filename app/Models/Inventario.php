<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Setor;
class Inventario extends Model
{
    use HasFactory;
    protected $fillable = ['fk_setor','id'];
    public function setor(){
        return $this->belongsTo(Setor::class,'fk_setor');
    }
}
