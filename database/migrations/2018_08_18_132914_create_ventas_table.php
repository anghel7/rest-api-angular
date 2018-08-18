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
      $table->integer('id_producto')->unsigned();
      $table->integer('id_cliente')->unsigned();
      $table->integer('total');
      $table->date('fecha');
      $table->boolean('deleted')->default(false);
      $table->timestamps();
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
