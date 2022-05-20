<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('restaurants')) return;       
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('address');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
         

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

        Schema::dropIfExists('restaurants');
    }
}
