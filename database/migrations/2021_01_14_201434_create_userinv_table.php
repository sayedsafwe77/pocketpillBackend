<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinv', function (Blueprint $table) {
            $table->integer('invNo', true);
            $table->date('invDate');
            $table->integer('userId')->index('userId');
            $table->string('productCode', 77)->index('productCode');
            $table->integer('productQuantity');
            $table->primary(['invNo', 'invDate']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userinv');
    }
}
