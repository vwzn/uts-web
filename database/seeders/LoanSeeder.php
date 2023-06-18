<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Loan;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $loans = [
            [
                "notransaksi"       => "Tr1",
                'tgl_pinjam' => date('v-m-d'),
                'tgl_pengembalian' => date('v-m-d'),
                'peminjam' => 'Muhammad Firman Yusuf',
                'status' => 'masih di pinjam',
                'petugas' => 'agus',
                'noKtp' => '123445645'

            ]
        ];
        foreach ($loans as $loan) {
            Loan::Create([
                "notransaksi" => $loan["notransaksi"],
                "cars_id" => $loan["cars_id"],
                "tgl_pinjam" => $loan["tgl_pinjam"],
                "tgl_pengembalian" => $loan["tgl_pengembalian"],
                "peminjam" => $loan["peminjam"],
                "status" => $loan["status"],
                "petugas" => $loan["petugas"],
                "noKtp" => $loan["noKtp"]
            ]);
        }
    }
}
