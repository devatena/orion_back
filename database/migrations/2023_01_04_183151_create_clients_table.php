<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->boolean('isPhysicalPerson');
            $table->string('name');
            $table->string('corporate-name');
            $table->string('nickname');
            $table->string('fantasy-name');
            $table->string('cpf');
            $table->string('cnpj');
            $table->string('rg');
            $table->string('issuer');
            $table->string('gender');
            $table->date('birthday');
            $table->string('telephone');
            $table->string('cellphone');
            $table->string('email');
            $table->string('site');
            $table->string('cep');
            $table->string('street');
            $table->string('number');
            $table->string('complement');
            $table->string('neighborhood');
            $table->string('town');
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
        Schema::dropIfExists('clients');
    }
};
