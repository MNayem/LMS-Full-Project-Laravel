<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
              $table->increments('id');

              $table->unsignedInteger('product_id');
              $table->unsignedInteger('user_id')->nullable();
              $table->unsignedInteger('order_id')->nullable();
              $table->string('ip_address')->nullable();
              $table->integer('product_quantity')->default(1);
    
              $table->timestamps();
    
              $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
    
              $table->foreign('product_id')
              ->references('id')->on('product')
              ->onDelete('cascade');
    
              $table->foreign('order_id')
              ->references('id')->on('order2s')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
