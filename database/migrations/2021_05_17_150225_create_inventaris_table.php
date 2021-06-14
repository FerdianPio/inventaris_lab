<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->increments("id_inv");
            $table->string("kodeInventaris",12);
            $table->string("namaInventaris",50);
            $table->unsignedInteger("id_kat");
            $table->unsignedInteger("id_ruang");
            $table->integer("jumlah")->unsigned();
            $table->enum("status",["baik","perlu perbaikan","rusak"]);
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
        Schema::dropIfExists('inventaris');
    }
}
