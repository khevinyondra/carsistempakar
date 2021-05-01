<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $tale->string('pertanyaan1', 5);
            $tale->string('pertanyaan_a', 8);
            $tale->string('pertanyaan_b', 8);
            $tale->string('pertanyaan_c', 8);
            $tale->string('pertanyaan_d', 8);
            $tale->string('kesimpulan', 50);
            $tale->string('solusi', 100);
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
        Schema::dropIfExists('rules');
    }
}
