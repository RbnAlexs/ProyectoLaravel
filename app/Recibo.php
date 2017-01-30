<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    protected $table = "recibos";
    protected $primaryKey = "id";
    protected $fillable = [
        'id_usuario',
        'observacion',
        'fechaRecibo',
        'estatus',
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
    public function documentos()
    {
        return $this->hasMany('App\ReciboDocumento', 'id_recibo');
    }
}
