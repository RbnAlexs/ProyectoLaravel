<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReciboDocumento extends Model
{
    protected $table = "recibos_documentos";
    protected $primaryKey = "id";
    protected $fillable = [
        'id_recibo',
        'ruta',
        'estatus',
    ];
    public function factura()
    {
        return $this->belongsTo('App\Recibo', 'id_recibo');
    }
}
