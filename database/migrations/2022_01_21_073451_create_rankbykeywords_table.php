<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRankbykeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rankbykeywords', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id')->default(0);
            $table->integer('keyword_id')->default(0);
            $table->integer('rank')->default(999999999);
            $table->string('status')->default('new');
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
        Schema::dropIfExists('rankbykeywords');
    }
}