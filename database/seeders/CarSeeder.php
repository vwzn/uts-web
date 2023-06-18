<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            [
                'nopol' => 'b123xy',
                'color' => 'red',
                'pemilik' => 'agus',
                'stok' => '10'
            ]
        ];
        foreach ($cars as $car) {
            Car::Create([
                'nopol' => $car['nopol'],
                'color' => $car['color'],
                'pemilik' => $car['pemilik'],
                'stok' => $car['stok'],

            ]);
        }
    }
}
