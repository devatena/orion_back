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
            $table->boolean('isPhysicalPerson')->nullable();
            $table->string('status')->nullable();
            $table->string('name');
            $table->string('corporate_name')->nullable();
            $table->string('nickname')->nullable();
            $table->string('fantasy_name')->nullable();
            $table->string('cpf');
            $table->string('cnpj')->nullable();
            $table->string('rg')->nullable();
            $table->string('issuer')->nullable();
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->string('telephone');
            $table->string('cellphone')->nullable();
            $table->string('email')->nullable();
            $table->string('site')->nullable();
            $table->string('cep')->nullable();
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('town')->nullable();
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
