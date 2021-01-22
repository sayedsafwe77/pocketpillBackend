<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productinfo', function (Blueprint $table) {
            $table->foreign('category_name', 'productinfo_ibfk_1')->references('CategoryName')->on('category')->onUpdate('NO ACTION')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productinfo', function (Blueprint $table) {
            $table->dropForeign('productinfo_ibfk_1');
        });
    }
}
