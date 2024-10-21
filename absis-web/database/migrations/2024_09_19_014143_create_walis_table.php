<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('walis', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->unsignedBigInteger('wali_kelas');
        $table->string('kontak');
        $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
        $table->string('alamat')->nullable();
        $table->timestamps();

        $table->foreign('wali_kelas')->references('id')->on('kelas')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('walis');
    }
};
