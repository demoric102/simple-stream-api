<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Programmes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();
            $table->string('channel_id');
            $table->string('programme_name');
            $table->timestamps('start_time');
            $table->timestamps('end_time');
            $table->timestamps('duration');
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
        //
    }
}
