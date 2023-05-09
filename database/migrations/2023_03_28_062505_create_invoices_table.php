<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_code'); 
            $table->unsignedBigInteger('Customer_id');
            $table->foreign('Customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('Product_id');
            $table->foreign('Product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('Currency'); 
           
            $table->integer('quantity');
            $table->integer('unite_price');
            $table->integer('discount');
            $table->integer('total_price')->nullable();
            $table->date('delevary_time')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
