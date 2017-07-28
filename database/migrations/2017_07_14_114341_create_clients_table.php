<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function(Blueprint $table){
           $table->increments('id');
           $table->string('name', 100);
           $table->string('fantasy_name', 100);
           $table->string('cnpj', 15)->unique();
           $table->string('address', 100);
           $table->string('state', 50);
           $table->string('city',100);
           $table->string('district', 50);
           $table->string('cep', 10);
           $table->string('contact', 50);
           $table->string('email', 50);
           $table->string('phone', 15);
           $table->string('logo', 100)->default('nologo.png');
           $table->integer('status')->default(1);
           $table->timestamps();
           $table->softDeletes();
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
}
