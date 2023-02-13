<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = Module::defaultModules();
        
        foreach ($modules as $module) {
            Module::updateOrCreate(['name' => $module]);
        }

        $this->command->info('Modules seeded!');
    }
}
