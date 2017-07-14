<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documentos';

    protected $primaryKey = 'id';

    protected $filliable = [
        'tipo_documento_id',
        'nombre',
        'autor',
        'volumen',
        'descripcion',
        'pdf',
        'caratula'
    ];

    protected $guarded = 'id';

    public function tipo_documento()
    {
        return $this->belongsTo('App\TipoDocumento');
    }
}
