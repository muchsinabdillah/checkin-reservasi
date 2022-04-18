<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walkers', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('fullname'); 
            $table->string('phonenumber')->unique();
            $table->string('email')->unique();
            $table->string('idtype');
            $table->string('idnumber')->unique();
            $table->string('npwp');
            $table->string('npwpnumber')->unique(); 
            $table->string('walkername');
            $table->text('walkeraddress');
            $table->string('coordinatpoint');  
            $table->string('itemsell');
            $table->string('timeopenclose'); 
            $table->string('ownership');
            $table->text('nameownership'); 
            $table->text('phoneownership');
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
        Schema::dropIfExists('walkers');
    }
}
