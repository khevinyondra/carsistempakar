<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateHasilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hasil', function (Blueprint $table) {
            $table->renameColumn('Nama', 'nama');
            $table->renameColumn('Plat_Nomor', 'plat_nomor');
            $table->unsignedInteger('rules_id')->after('Plat_Nomor');
            $table->json('jawaban')->after('rules_id');
            $table->dropColumn(['pertanyaan1', 'pertanyaan_a', 'pertanyaan_b', 'pertanyaan_c', 'pertanyaan_d', 'kesimpulan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hasil', function (Blueprint $table) {
            $table->renameColumn('nama', 'Nama');
            $table->renameColumn('plat_nomor', 'Plat_Nomor');
            $table->dropColumn('jawaban');
            $table->string('pertanyaan1', 8);
            $table->string('pertanyaan_a', 8);
            $table->string('pertanyaan_b', 8);
            $table->string('pertanyaan_c', 8);
            $table->string('pertanyaan_d', 8);
            $table->text('kesimpulan');
        });
    }
}
