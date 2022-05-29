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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm');
            $table->string('nama');
            $table->integer('jenis_identitas_id')->nullable();
            $table->string('no_identitas')->nullable();
            $table->char('jenis_kelamin',1);
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->char('warga_negara',3)->default('wni');
            $table->unsignedInteger('status_nikah_id')->nullable();
            $table->unsignedInteger('agama_id')->nullable();
            $table->unsignedInteger('pendidikan_id')->nullable();
            $table->unsignedInteger('suku_id')->nullable();
            $table->unsignedInteger('pekerjaan_id')->nullable();
            $table->string('no_telepon')->nullable();
            $table->char('gol_darah',2)->nullable();
            $table->tinyInteger('rhesus')->nullable();
            $table->text('alamat')->nullable();
            $table->unsignedBigInteger('provinsi_id')->nullable();
            $table->unsignedBigInteger('kota_id')->nullable();
            $table->unsignedBigInteger('kecamatan_id')->nullable();
            $table->unsignedBigInteger('kelurahan_id')->nullable();
            $table->char('rt',3)->nullable()->nullable();
            $table->char('rw',3)->nullable();
            $table->string('kodepos',7)->nullable();
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
        Schema::dropIfExists('pasiens');
    }
};
