<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id();
            $table->string("nama", 50);
            $table->string("kode", 4);
            $table->string("email", 30);
            $table->text("alamat");
            $table->date("tgl_berdiri");
            $table->timestamps(); // tanggal buat(created_at), tgl update(updated_at)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // migrationnya dimundurkan
    {
        Schema::dropIfExists('fakultas');
    }
}
