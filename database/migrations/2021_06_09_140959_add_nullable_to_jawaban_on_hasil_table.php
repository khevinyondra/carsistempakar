<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableToJawabanOnHasilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hasil', function (Blueprint $table) {
            $table->unsignedInteger('rules_id')->nullable()->change();
            $table->json('jawaban')->nullable()->change();
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
            $table->unsignedInteger('rules_id')->change();
            $table->json('jawaban')->change();
        });
    }
}
