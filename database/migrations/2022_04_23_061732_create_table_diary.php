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
        Schema::create('diary', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->unsignedBigInteger('period_id');
            $table->foreign('period_id')->references('id')->on('period');
            $table->string('date')->nullable();
            $table->string('content')->nullable();
            $table->string('title')->nullable();
            $table->enum('active',[1,0])->comment('show status');
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
        Schema::dropIfExists('diary');
    }
};
