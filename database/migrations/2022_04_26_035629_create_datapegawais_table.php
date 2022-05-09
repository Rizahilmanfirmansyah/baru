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
        Schema::create('datapegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('jabatan', 100);
            $table->string('jk', 100);
            $table->string('noktp', 100);
            $table->string('npwp', 100);
            $table->string('nobpjs', 100);
            $table->string('nokk', 100);
            $table->string('ttl', 100);
            $table->string('alamatktp', 100);
            $table->string('domisili', 100);
            $table->string('gaji', 100);
            $table->string('tanggalgaji', 100);
            $table->string('norek', 100);
            $table->string('bank', 100);
            $table->string('email', 100);
            $table->string('nohp', 100);
            $table->string('tanggalawal', 100);
            $table->string('status', 100);
            $table->string('tanggungan', 100);
            $table->string('awalmasuk', 100);
            $table->string('tanggalmasuk', 100);
            $table->string('berakhir', 100);
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
        Schema::dropIfExists('datapegawai');
    }
};
