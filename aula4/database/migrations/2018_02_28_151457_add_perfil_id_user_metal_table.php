<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPerfilIdUserMetalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::table('user_metal', function (Blueprint $table) {
            $table->integer('perfil_id')->unsigned();
            
            $table->foreign('perfil_id')->references('id')->on('perfil');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_metal', function (Blueprint $table) {
            $table->dropForeign(['perfil_id']);
        });
    }
}
