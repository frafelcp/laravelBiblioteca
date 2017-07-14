<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = 'tipo_documentos';

    protected $primaryKey = 'id';

    protected $filliable = [
        'nombre',
        'descripcion'
    ];

    protected $guarded = 'id';

    public function documentos()
    {
        return $this->hasMany('App\Documento');
    }
}
