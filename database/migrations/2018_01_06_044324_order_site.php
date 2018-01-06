<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderSite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',10);
            $table->string('phone',10);
            $table->integer('num');
            $table->string('order_date',15);
            $table->string('order_time',15);
            $table->string('complete_at',25)->default(null);
            $table->integer('status');
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
