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
            $table->string('pertanyaan1', 5);
            $table->string('pertanyaan_a', 8);
            $table->string('pertanyaan_b', 8);
            $table->string('pertanyaan_c', 8);
            $table->string('pertanyaan_d', 8);
            $table->string('kesimpulan', 50);
            $table->string('solusi', 100);
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
