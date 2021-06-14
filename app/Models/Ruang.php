<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $primaryKey='id_ruang';
    protected $table='ruang';
    protected $guarded=['id_ruang'];

    public function inventaris()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->hasMany('App\Models\Inventaris','id_ruang','id_ruang');
    }

    public function habispakai()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->hasMany('App\Models\HabisPakai','id_ruang','id_ruang');
    }
}
