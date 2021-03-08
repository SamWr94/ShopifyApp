<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name', 50);
            $table->text('Description')->nullable();
            $table->string('Address');
            $table->string('City');
            $table->string('Province');
            $table->string('Postcode');
            $table->float('Lat', 10, 6);
            $table->float('Lng', 10, 6);
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
        Schema::dropIfExists('shops');
    }
}
