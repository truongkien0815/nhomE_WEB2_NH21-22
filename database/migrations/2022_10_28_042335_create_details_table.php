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
        Schema::create('details', function (Blueprint $table) {
            $table->id('detail_id');
            $table->integer('product_id');
            $table->integer('payment_id');
            //$table->primary(['product_id', 'payment_id']);
            $table->integer('quantity');
            $table->integer('status');
            $table->string('address');
            $table->string('telephone');

            

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
        Schema::dropIfExists('details');
    }
};
