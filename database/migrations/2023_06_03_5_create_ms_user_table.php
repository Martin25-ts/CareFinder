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
        Schema::create('msuser', function (Blueprint $table) {
            $table->string('userid', 100)->primary();
            $table->string('userfname', 50);
            $table->string('userlname', 50);
            $table->string('password', 255);
            $table->string('userphone', 20);
            $table->string('useremail', 50);
            $table->string('userprofile', 100)->nullable();
            $table->integer('userheight')->nullable();
            $table->integer('userweight')->nullable();
            $table->date('userDOB')->nullable();
            $table->char('bloodId', 5)->nullable();
            $table->char('relationshipId', 5)->nullable();
            $table->string('userinsurance', 50)->nullable();
            $table->string('userdisesase', 100)->nullable();
            $table->char('genderId', 5)->nullable();
            $table->char('statusId', 5)->nullable();
            $table->string('remember_token',255)->nullable();
            $table->date('updated_at');
            $table->date('created_at');
            $table->foreign('bloodId')->references('bloodId')->on('msblood')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('relationshipId')->references('relationshipId')->on('msrelationship')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('genderId')->references('genderId')->on('msgender')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('statusId')->references('statusId')->on('msstatus')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msuser');
    }
};
