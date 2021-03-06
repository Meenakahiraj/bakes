<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdermodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odermodels', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('user_id');
            $table->string('address');
            $table->string('status');
            $table->string('payment_method');
            $table->string('payment_status');
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
        Schema::dropIfExists('odermodels');
    }
}
