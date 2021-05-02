<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil', function (Blueprint $table) {
            $table->id();
            $table->string('Nama', 30);
            $table->string('Plat_Nomor', 20);
            $table->string('pertanyaan1', 5);
            $table->string('pertanyaan_a', 8)->nullable();
            $table->string('pertanyaan_b', 8)->nullable();
            $table->string('pertanyaan_c', 8)->nullable();
            $table->string('pertanyaan_d', 8)->nullable();
            $table->string('kesimpulan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil');
    }
}
