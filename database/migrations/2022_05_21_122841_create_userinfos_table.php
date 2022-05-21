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
        Schema::create('userinfos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fathername');
            $table->string('mothername');
            $table->string('trainingname');
            $table->string('cirtificateno');
            $table->string('village');
            $table->string('postoffice');
            $table->string('province');
            $table->string('district');
            $table->string('nid');
            $table->string('birthdate');
            $table->string('phone')->unique();
            $table->string('parentphone')->unique();
            $table->string('emailfb')->unique();
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('userinfos');
    }
};
