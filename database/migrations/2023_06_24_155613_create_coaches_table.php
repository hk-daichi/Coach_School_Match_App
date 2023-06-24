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
        Schema::create('coaches', function (Blueprint $table) {
            //$table->id();
            $table->unsignedBigInteger('id')->primary();
            $table->string('user_name');
            $table->boolean('gender');
            $table->date('dete_of_birth');
            $table->string('level');
            $table->string('area');
            $table->string('timeframe');
            $table->string('self_introduction');
            $table->string('img_url');
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
        Schema::dropIfExists('coaches');
    }
};
