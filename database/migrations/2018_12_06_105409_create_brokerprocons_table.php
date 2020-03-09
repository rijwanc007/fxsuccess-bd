<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrokerproconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brokerprocons', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('broker_id');
            $table->integer('brokerreview_id')->unsigned()->index();
            $table->foreign('brokerreview_id')->references('id')->on('brokerreviews')->onDelete('cascade');
            $table->text('pro_con');
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
        Schema::dropIfExists('brokerprocons');
    }
}
