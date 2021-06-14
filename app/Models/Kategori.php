<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $primaryKey='id_kat';
    protected $table='kategori';
    protected $guarded=['id_kat'];

    public function inventaris()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->hasMany('App\Models\Inventaris','id_kat','id_kat');
    }

    public function habispakai()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->hasMany('App\Models\HabisPakai','id_kat','id_kat');
    }
}
