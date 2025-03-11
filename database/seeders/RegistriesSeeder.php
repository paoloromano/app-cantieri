<?php

namespace Database\Seeders;

use App\Models\Registry;
use Illuminate\Database\Seeder;

class RegistriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $registries = [
            ['id' => 1, 'name' => 'ASD'],
            ['id' => 2, 'name' => 'APS'],
            ['id' => 3, 'name' => 'SSD'],
            ['id' => 4, 'name' => 'SSD a RL'],
            ['id' => 5, 'name' => 'ODV'],
            ['id' => 6, 'name' => 'Onlus'],
            ['id' => 7, 'name' => 'RUNTS'],
            //['id' => 8, 'name' => 'CSV'], deleted
            ['id' => 9, 'name' => 'Cooperativa sociale'],
            ['id' => 10, 'name' => 'Impresa sociale'],
            ['id' => 11, 'name' => 'Fondazione'],
            ['id' => 12, 'name' => 'Ente religioso'],
        ];

        foreach ($registries as $registry) {
            Registry::updateOrInsert(
                ['id' => $registry['id']],
                ['name' => $registry['name']]
            );
        }

        $ids = array_column($registries, 'id');
        $registriesToDelete = Registry::whereNotIn('id', $ids)->get();
        foreach ($registriesToDelete as $registry) {
            $registry->tenders()->detach();
            $registry->delete();
        }
    }
}
