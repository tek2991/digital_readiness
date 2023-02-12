<?php

namespace Database\Seeders;

use App\Models\Cstate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cstates = Cstate::defaultCstates();

        foreach ($cstates as $cstate) {
            Cstate::updateOrCreate(['name' => $cstate]);
        }

        $this->command->info('Cstates seeded!');
    }
}
