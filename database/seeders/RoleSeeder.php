<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::defaultRoles();

        foreach ($roles as $role) {
            Role::updateOrCreate(['name' => $role]);
        }

        $this->command->info('Roles seeded!');
    }
}
