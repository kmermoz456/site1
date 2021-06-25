<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->mediumText("tilte")->nullable();
           // $table->string('niveau');
            $table->smallInteger('point');
            $table->smallInteger('good_answers');
            $table->string('type')->default('QCM');
            $table->mediumText('explication')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('sujet_id');
            $table->foreign('sujet_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
