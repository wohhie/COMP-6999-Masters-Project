<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetworkinterfaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networkinterface', function (Blueprint $table) {
            $table->id();
            $table->string('pc_name');
            $table->string('os_type');
            $table->string('public_ip');
            $table->string('private_ip');
            $table->string('vpn_ip');
            $table->string('gateway_ip');
            $table->string('active_interface');
            $table->string('mac_address');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::table('networkinterface', function (Blueprint $table) {
            //
            Schema::dropIfExists('networkinterface');
        });
    }
}
