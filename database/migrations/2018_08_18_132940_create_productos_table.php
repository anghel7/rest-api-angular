<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('productos', function (Blueprint $table) {
      $table->increments('id_producto');
      $table->string('nombre');
      $table->integer('precio');
      $table->integer('stock');
      $table->integer('cantidad');
      $table->string('marca');
      $table->string('image_url',500);
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
    Schema::dropIfExists('productos');
  }
}
