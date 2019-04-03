<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fii', function (Blueprint $table) {
            $table->increments('fii_id');
            $table->string('fii_nome');
            $table->string('fii_descricao');
            $table->string('fii_ticket');
            $table->double('fii_valor', 8, 2);
            $table->integer('fii_status');
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
        Schema::dropIfExists('fii');
    }
}
