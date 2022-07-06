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
        Schema::create('tb_Penawaran', function (Blueprint $table) {
            $table->id('id_penawaran');
            $table->string('email');
            $table->string('nama_PT');
            $table->longText('Alamat');
            $table->char('No_HP');
            $table->longText('Perihal');
            $table->dateTime('tanggal_penawaran')->useCurrent();
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
        Schema::dropIfExists('tb_Penawaran');
    }
};
