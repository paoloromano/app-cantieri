<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Seeder;

class SectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectors = [
            ['id' => 1, 'name' => 'Volontariato'],
            ['id' => 2, 'name' => 'Culturale'],
            ['id' => 3, 'name' => 'Educativo'],
            ['id' => 4, 'name' => 'Sportivo'],
            ['id' => 5, 'name' => 'Salute'],
            ['id' => 6, 'name' => 'Ambientale'],
            ['id' => 7, 'name' => 'Cinema'],
            ['id' => 8, 'name' => 'Cooperazione'],
            ['id' => 9, 'name' => 'Disabilità'],
        ];

        foreach ($sectors as $sector) {
            Sector::updateOrInsert(
                ['id' => $sector['id']],
                ['name' => $sector['name']]
            );
        }
    }
}
