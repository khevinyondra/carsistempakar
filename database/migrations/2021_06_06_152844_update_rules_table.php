<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rules', function (Blueprint $table) {
            $table->renameColumn('pertanyaan1', 'kode_pertanyaan');
            $table->renameColumn('Solusi', 'solusi');
            $table->dropColumn(['pertanyaan_a', 'pertanyaan_b', 'pertanyaan_c', 'pertanyaan_d']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rules', function (Blueprint $table) {
            $table->renameColumn('kode_pertanyaan', 'pertanyaan1');
            $table->renameColumn('solusi', 'Solusi');
            $table->string('pertanyaan_a', 8);
            $table->string('pertanyaan_b', 8);
            $table->string('pertanyaan_c', 8);
            $table->string('pertanyaan_d', 8);
        });
    }
}
