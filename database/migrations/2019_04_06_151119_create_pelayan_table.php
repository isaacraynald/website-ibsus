<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelayanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('marga');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('wijk');
            $table->string('hp');
            $table->string('status');
            $table->boolean('wl');
            $table->boolean('pemusik');
            $table->boolean('singer');
            $table->boolean('multimedia');
            $table->boolean('bulib');
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
        Schema::dropIfExists('pelayan');
    }
}
