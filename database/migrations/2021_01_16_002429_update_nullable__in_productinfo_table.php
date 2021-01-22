<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNullableInProductinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productinfo', function (Blueprint $table) {
            $table->string('productSideEfects', 400) ->nullable() ->change();
            $table->string('productdescription', 400) ->nullable() ->change();
            $table->integer('productNoOfSearch') ->nullable() ->change();
            $table->string('manufacturer', 22) ->nullable() ->change();
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
            $table->string('productSideEfects')->change();
            $table->string('productdescription')->change();
            $table->string('productNoOfSearch')->change();
            $table->string('manufacturer')->change();
        });
    }
}
