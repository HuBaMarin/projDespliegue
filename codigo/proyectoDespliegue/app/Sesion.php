<?php

namespace App;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//
//class Sesion extends Model
//{
//    use HasFactory;
//
//    protected $fillable = [
//        'clientes_id',
//        'ultimoAcceso',
//    ];
////
////    public function cliente()
////    {
////        return $this->belongsTo(Cliente::class);
////    }
//}

class Sesion extends Model
{
    use HasFactory;

    protected $table = 'sesiones';

    protected $fillable = [
        'clientes_id',
        'ultimoAcceso'
    ];





}
