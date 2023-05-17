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
        Schema::create('accounts_itens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_account')->nullable();
            $table->string('item')->nullable();
            $table->integer('qtd')->nullable();
            $table->timestamps();
            $table->foreign('id_account')->references('id')->on('accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_itens');
    }
};