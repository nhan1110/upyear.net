<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingMembersProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking_members_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('member_id');
            $table->string('view',10);
            $table->string('share',10);
            $table->string('comment',10);
            $table->string('rating',10);
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
        Schema::dropIfExists('tracking_members_products');
    }
}
