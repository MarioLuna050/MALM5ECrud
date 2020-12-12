<?php
////MALM Mario Albeto Luna Montes 5°E
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PoetCircle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('poet');
        Schema::create('poet', function (Blueprint $table) {
            $table->integer('poet_code');
            $table->string('first_name', 30);
            $table->string('surname', 40);
            $table->string('adress', 100);
            $table->string('postcode',20);
            $table->string('telephone_number',30);
        });
        Schema::dropIfExists('poem');
        Schema::create('poem', function (Blueprint $table) {
            $table->integer('poem_code')->primary();
            $table->string('title', 30);
            $table->text('contents');
            $table->integer('poet_code');
        });
        Schema::dropIfExists('publicacion');
        Schema::create('publicacion', function (Blueprint $table) {
            $table->integer('publication_code')->primary();
            $table->string('titles', 100);
            $table->mediumInteger('price');
        });

        DB::statement("DROP TABLE IF EXISTS sale");
        DB::statement("CREATE TABLE sale(
        sale_code INT(11),
	    sale_date DATE,
	    amount INT(10),
	    customer_code INT(11),
	     PRIMARY KEY (sale_code))");


        DB::statement("DROP TABLE IF EXISTS customer");
        DB::statement("CREATE TABLE customer(
        customer_code INT(11),
	    first_name VARCHAR(255),
	    surname VARCHAR(255),
	    address VARCHAR(255),
	    postcode VARCHAR(255),
	    telephone_number VARCHAR(255),
	    PRIMARY KEY (customer_code))");

        Schema::dropIfExists('poem_publication');
        Schema::create('poem_publication', function (Blueprint $table) {
            $table->integer('publication_code');
            $table->integer('poem_code');
        });

        DB::statement("DROP TABLE IF EXISTS sale_publication");
        DB::statement("CREATE TABLE sale_publication(
         sale_code INT(11),
	     publication_code INT(11))");


    }


    public function down()
    {
        Schema::table('poet', function (Blueprint $table) {
            Schema::dropIfExists('poet');
        });

        Schema::table('poem', function (Blueprint $table) {
            Schema::dropIfExists('poem');
        });

        Schema::table('publicacion', function (Blueprint $table) {
            Schema::dropIfExists('publicacion');
        });

        Schema::table('sale', function (Blueprint $table) {
            Schema::dropIfExists('sale');
        });
        Schema::table('customer', function (Blueprint $table) {
            Schema::dropIfExists('customer');
        });
        Schema::table('poem_publication', function (Blueprint $table) {
            Schema::dropIfExists('poem_publication');
        });
        Schema::table('sale_publication', function (Blueprint $table) {
            Schema::dropIfExists('sale_publication');
        });
    }
}


