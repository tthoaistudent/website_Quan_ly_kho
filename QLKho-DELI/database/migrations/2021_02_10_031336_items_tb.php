<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemsTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('items_tb', function (Blueprint $table) {
            $table->Increments('item_id');
            $table->string('item_name');
            $table->string('item_DVT');
            $table->string('item_date');
            $table->string('item_category');
            $table->integer('item_soluong');
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
