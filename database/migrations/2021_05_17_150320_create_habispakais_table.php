<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabisPakaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habispakai', function (Blueprint $table) {
            $table->increments("id_hap");
            $table->string("kodeBarang",12);
            $table->string("namaBarang",50);
            $table->unsignedInteger("id_kat");
            $table->unsignedInteger("id_ruang");
            $table->integer("jumlah")->unsigned();
            $table->timestamps();

            $table->foreign("id_kat")->references("id_kat")->on("kategori")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("id_ruang")->references("id_ruang")->on("ruang")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habis_pakai');
    }
}
