<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetailaddress', function (Blueprint $table) {
            $table->string('userid', 100);
            $table->char('userdetailid', 5);
            $table->string('userstreet', 50)->nullable();
            $table->string('userward', 50)->nullable();
            $table->string('userdistrict', 50)->nullable();
            $table->string('userregency', 50)->nullable();
            $table->char('userpostal', 5)->nullable();


            $table->primary(['userid', 'userdetailid']);
            $table->foreign('userid')->references('userid')->on('msuser')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userdetailaddress');
    }
};
