<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans', function (Blueprint $table) {
            $table->increments('id')->length(10);
            $table->unsignedInteger('user_id')->length(10);
            $table->unsignedInteger('tipos_id')->length(11);
            $table->date('data');
            $table->decimal('valor',10,2);
            $table->tinyInteger('credito')->length(4);
            $table->timestamps();
        });

        Schema::table('trans', function (Blueprint $table) {

            $table->foreign('user_id')
            ->references('id')->on('users');
            
            $table->foreign('tipos_id')
            ->references('id')->on('tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans');
    }
}
