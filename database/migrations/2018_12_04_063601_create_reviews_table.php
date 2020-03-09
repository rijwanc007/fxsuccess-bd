<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('name');
            $table->string('rating11');
            $table->text('comment');
            //$table->integer('broker_id');
            $table->integer('brokerreview_id')->unsigned()->index();
            $table->foreign('brokerreview_id')->references('id')->on('brokerreviews')->onDelete('cascade');
            $table->integer('likes_count')->default(0);
            $table->timestamp('posted_at');
             //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
