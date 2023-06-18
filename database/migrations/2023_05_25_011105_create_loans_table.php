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
            $table->string('status');
            $table->string('petugas');
            $table->string('noKtp');
            $table->foreignIdfor(Car::class,'car_id');
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
