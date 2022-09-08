<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->foreignId('estabelecimento_id')
          ->nullable()
          ->constrained('estabelecimento')
          ->nullOneDelete();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->dropForeign('users_estabelecimento_id_foreign');
          $table->dropColumn(['estabelecimento_id']);
            //
        });
    }
};
