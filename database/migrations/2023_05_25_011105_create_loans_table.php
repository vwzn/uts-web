<?php

use App\Models\Car;
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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('notransaksi');
            $table->date('tgl_pinjam');
            $table->date('tgl_pengembalian');
            $table->string('peminjam');
            $table->enum('status', ['masih di pinjam', 'sudah di kembalikan'])->default('masih di pinjam');
            $table->string('petugas');
            $table->string('noKtp');
            $table->foreignIdFor(Car::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
