<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrokervideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brokervideos', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('broker_id');
            $table->integer('brokerreview_id')->unsigned()->index();
            $table->foreign('brokerreview_id')->references('id')->on('brokerreviews')->onDelete('cascade');

            $table->text('video_info');
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
        Schema::dropIfExists('brokervideos');
    }
}
