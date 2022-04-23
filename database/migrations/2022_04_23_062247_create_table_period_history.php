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
        Schema::create('period_history', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->unsignedBigInteger('period_id');
            $table->foreign('period_id')->references('id')->on('period');
            $table->string('year')->nullable();
            $table->string('month')->nullable();
            $table->enum('history_status',['New','Edit','Delete'])->default('New')->comment('period change history');
            $table->enum('active',[1,0])->default(1)->comment('show status');
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
        Schema::dropIfExists('period_history');
    }
};
