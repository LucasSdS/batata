<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsOnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger("sexo");
            $table->string("endereco");
            $table->smallInteger("idade")->unsigned();
            $table->string("cpf", 20)->unique;
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
            $table->dropColumn('sexo');
            $table->dropColumn('endereco');
            $table->dropColumn("idade");
            $table->dropColumn("cpf");
            //
        });
    }
}
