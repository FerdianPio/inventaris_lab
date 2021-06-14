<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    protected $primaryKey='id_inv';
    protected $table='inventaris';
    protected $guarded=['id_inv'];
    // protected $guarded=[];
    // public $incrementing = false;
    // public $keyType = "string";

    public function kategori()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->belongsTo('App\Models\Kategori','id_kat','id_kat');
    }

    public function ruang()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->belongsTo('App\Models\Ruang','id_ruang','id_ruang');
    }
}
