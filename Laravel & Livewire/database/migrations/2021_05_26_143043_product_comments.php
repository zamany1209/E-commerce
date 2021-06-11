<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product_comments', function (Blueprint $table) {
            $table->id();
            $table->string('family');
            $table->string('product_id');
            $table->string('user_id');
            $table->string('com_id')->default(null);
            $table->string('content');
            $table->enum('confirmed',['yes','no'])->default('yes');
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
