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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('nam_leng');
            //$table->foreignId('jenis_id');
            $table->date('tgl_datang');
            $table->time('jm_datang');
            $table->integer('jml_org');
            $table->string('email');
            $table->string('no_tlp');
            $table->string('asne');
            $table->string('askot');
            $table->text('ket_tam');
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
        Schema::dropIfExists('posts');
    }
};
