<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductcatagoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productcatagory', function (Blueprint $table) {
            $table->foreign('CategoryName', 'productcatagory_ibfk_1')->references('CategoryName')->on('category')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('productCode', 'productcatagory_ibfk_2')->references('productCode')->on('productinfo')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('productCode', 'productcatagory_ibfk_3')->references('productCode')->on('productinfo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('CategoryName', 'productcatagory_ibfk_4')->references('CategoryName')->on('category')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productcatagory', function (Blueprint $table) {
            $table->dropForeign('productcatagory_ibfk_1');
            $table->dropForeign('productcatagory_ibfk_2');
            $table->dropForeign('productcatagory_ibfk_3');
            $table->dropForeign('productcatagory_ibfk_4');
        });
    }
}
