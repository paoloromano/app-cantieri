<?php

namespace Database\Seeders;

use App\Models\Revenue;
use Illuminate\Database\Seeder;

class RevenuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $revenues = [
            ['id' => 1, 'name' => 'tra 100000 e 500000'],
            ['id' => 2, 'name' => 'tra 500000 e 1000000'],
            ['id' => 3, 'name' => 'Più di 1000000'],
        ];

        foreach ($revenues as $revenue) {
            Revenue::updateOrInsert(
                ['id' => $revenue['id']],
                ['name' => $revenue['name']]
            );
        }
    }
}
