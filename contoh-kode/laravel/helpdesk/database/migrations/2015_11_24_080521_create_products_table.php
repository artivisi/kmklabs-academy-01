<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
	    // daftar kolom
            $table->increments('id');
	    $table->string('code');
	    $table->string('name');
	    $table->string('description')->nullable();
            $table->timestamps();

	    // unique constraint untuk kolom kode
	    $table->unique('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
