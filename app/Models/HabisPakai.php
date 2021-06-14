<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabisPakai extends Model
{
    use HasFactory;

    protected $primaryKey='id_hap';
    protected $table='habispakai';
    protected $guarded=['id_hap'];

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
