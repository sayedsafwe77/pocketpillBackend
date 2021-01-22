<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductcatagoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productcatagory', function (Blueprint $table) {
            $table->string('CategoryName', 77);
            $table->string('productCode', 77)->index('productCode');
            $table->primary(['CategoryName', 'productCode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productcatagory');
    }
}
