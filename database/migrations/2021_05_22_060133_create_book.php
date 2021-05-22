<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom')->notNull();
            $table->string('img');
            $table->string('avtor')->notNull();
            $table->integer('avtor_id')->notNull();
            $table->string('tur')->notNull();
            $table->integer('tur_id')->notNull();
            $table->integer('narx')->notNull();
            $table->string('nashriyot')->notNull();
            $table->integer('nashriyot_id')->notNull();
            $table->string('til')->notNull();
            $table->integer('til_id')->notNull();
            $table->integer('varaqsoni')->notNull();
            $table->integer('yili')->notNull();
            $table->integer('views')->default(0);
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
        Schema::dropIfExists('book');
    }
}
