<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->string('name')->nullable();
      $table->unsignedBigInteger('id_user')->nullable();
      $table->unsignedBigInteger('id_categoria')->nullable();
      $table->double('unitary_value',8,2)->nullable();

      $table->foreign('id_user')->references('id')->on('users');
      $table->foreign('id_categoria')->references('id')->on('categorias');
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
    Schema::dropIfExists('products');
  }
};