<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->date('tanggal');
            $table->string('bencana');
            $table->text('keterangan');
            $table->decimal('longitude', 10, 6);
            $table->decimal('latitude', 10, 6);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('beritas');
    }
};
