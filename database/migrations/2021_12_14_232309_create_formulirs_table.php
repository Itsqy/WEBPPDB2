<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->foreignId('user_id');
            $table->integer('nisn')->nullable();
            $table->string('place')->nullable();
            $table->date('birthday')->nullable()->date('d-m-Y');
            $table->string('agama')->nullable();
            $table->string('address')->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('jml_saudara')->nullable();
            $table->string('school')->nullable();
            $table->string('gender')->nullable();
            $table->string('tinggal_dengan')->nullable();
            $table->string('penyakit')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('kerja_ayah')->nullable();
            $table->string('kerja_ibu')->nullable();
            $table->string('pend_akhira')->nullable();
            $table->string('pend_akhiri')->nullable();
            $table->string('status')->nullable();
            $table->string('prestasi')->nullable();
            $table->text('file_prestasi')->nullable();
            $table->text('ijazah')->nullable();
            $table->text('photo')->nullable();
            $table->text('rapot')->nullable();
            $table->string('phone')->nullable();
            $table->string('no_telpayah')->nullable();
            $table->string('no_telpibu')->nullable();
            $table->integer('nilai1')->nullable();
            $table->integer('nilai2')->nullable();
            // $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('formulirs');
    }
}
