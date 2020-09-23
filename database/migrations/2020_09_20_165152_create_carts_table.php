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
        if(!Schema::hasTable('carts')) {
            Schema::create('carts', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
                $table->integer('customer_id')->unsigned();
                $table->foreign('customer_id')->references('id')->on('customers');
                $table->integer('subtotal');
                $table->integer('delivery')->default(0);
                $table->integer('promotion_id')->unsigned()->default(0);
                $table->foreign('promotion_id')->references('id')->on('promotions');
                $table->integer('total');
                $table->integer('province_id')->unsigned();
                $table->foreign('province_id')->references('id')->on('provinces');
                $table->integer('district_id')->unsigned();
                $table->foreign('district_id')->references('id')->on('districts');
                $table->integer('ward_id')->unsigned();
                $table->foreign('ward_id')->references('id')->on('wards');
                $table->string('address');
                $table->boolean('status')->default(0);
                $table->timestamps();
            });
        };
       
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
