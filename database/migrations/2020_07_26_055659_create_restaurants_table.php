<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('user_id')->comment('店长');
            $table->string('name')->default('')->comment('名称');
            $table->unsignedTinyInteger('level')->default('1')->comment('星级');
            $table->unsignedTinyInteger('is_branch')->default('0')->comment('是否为分店');
            $table->unsignedSmallInteger('oil')->default('0')->comment('当前油量');
            $table->unsignedSmallInteger('oil_capacity')->default('3000')->comment('油壶容量');
            $table->unsignedTinyInteger('facilities')->default('1')->comment('设施位总数');
            $table->unsignedTinyInteger('tables')->default('10')->comment('桌位总数');
            $table->unsignedTinyInteger('cockroaches')->default('0')->comment('当前蟑螂数');
            $table->timestamps();

            $table->unique('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
