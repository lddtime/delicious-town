<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->comment('玩家');
            $table->unsignedSmallInteger('level')->default('0')->comment('等级');
            $table->unsignedInteger('experience')->default('0')->comment('经验');
            $table->unsignedInteger('gold')->default('0')->comment('金币');
            $table->unsignedInteger('ingots')->default('0')->comment('元宝');
            $table->unsignedTinyInteger('health')->default('100')->comment('体力');
            $table->unsignedSmallInteger('gold_recipes')->default('0')->comment('金牌菜');
            $table->unsignedSmallInteger('ranking')->default('0')->comment('排名');
            $table->unsignedTinyInteger('status')->default('0')->comment('状态');
            $table->unsignedSmallInteger('cupboards')->default('100')->comment('橱柜容量');
            $table->unsignedSmallInteger('warehouses')->default('100')->comment('仓库容量');
            $table->unsignedSmallInteger('locks')->default('3')->comment('锁数');
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
        Schema::dropIfExists('profiles');
    }
}
