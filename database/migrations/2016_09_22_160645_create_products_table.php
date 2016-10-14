<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('products',function(Blueprint $tabla){

            $tabla->increments('id');

            $tabla->integer('user_id')->unsigned()->index();
            $tabla->string('titulo');
            $tabla->text('descripcion');
            $tabla->decimal('precio',9,2);

            $tabla->timestamps();

        });
        // Realizar cambios en la tabla productos
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
        // Para revertir los cambios
    }
}
