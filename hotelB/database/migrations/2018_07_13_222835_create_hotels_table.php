<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('denomination');
            $table->longText('adresse');
            $table->string('ville');
            $table->string('Commune');
            $table->string('mail');
            $table->string('telephone');
            $table->longText('commentaire');
            $table->integer('status');
            $table->integer('type');
            $table->string('photo');
            $table->string('photo1');
            $table->string('photo2');
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
        Schema::dropIfExists('hotels');
    }
}
