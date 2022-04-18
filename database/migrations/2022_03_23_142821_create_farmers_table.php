<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('fullname');
            $table->string('phonenumber')->unique();
            $table->string('email')->unique();
            $table->string('idtype');
            $table->string('idnumber')->unique();
            $table->string('npwp');
            $table->string('npwpnumber')->unique();

            $table->string('province');
            $table->text('farmeraddress');
            $table->string('coordinatpoint');

            $table->string('gardenarea');
            $table->string('namegardenarea');

            $table->string('harversttime');
            $table->text('ownershipgarden');
            $table->text('nameownershipgarden');
            $table->text('phoneownershipgarden');
            $table->text('otherpaltform');
            $table->text('readyjoin');
            $table->text('continuePhone');
            $table->string('tanioketimname');
            $table->timestamp('publish_at')->nullable();
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
        Schema::dropIfExists('farmers');
    }
}
