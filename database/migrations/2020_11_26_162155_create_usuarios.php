<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::dropIfExists('usuarios');
            Schema::create('usuarios', function (Blueprint $table) {
                $table->increments('idUsuario');
                $table->string('Usuario', 100);
                $table->string('password', 255);
                $table->string('key', 255);
                $table->timestamps();
            });
    DB::statement("DROP TABLE IF EXISTS games");
    DB::statement("CREATE TABLE games(
    idGame int(11) NOT NULL AUTO_INCREMENT,
    game VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY(idGame)
    )");

            }


        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public
        function down()
        {
            Schema::table('usuarios', function (Blueprint $table) {
                Schema::dropIfExists('usuarios');
            });
        }
    }
