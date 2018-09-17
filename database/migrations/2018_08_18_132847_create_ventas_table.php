<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('ventas', function (Blueprint $table) {
      $table->increments('id_venta');      
      $table->integer('id_cliente')->unsigned();
      $table->string('nit');
      $table->integer('id_producto')->unsigned();
      $table->integer('cantidad');
      $table->string('observacion')->default('NINGUNA');
      $table->boolean('deleted')->default(false);
      $table->timestamps();
      $table->foreign('id_producto')->references('id_producto')->on('productos')->onDelete('cascade');
      $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('ventas');
  }
}
