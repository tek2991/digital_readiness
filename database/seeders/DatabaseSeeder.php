<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call([
            RoleSeeder::class,
            CstateSeeder::class,
        ]);

        \App\Models\User::factory(1)->create([
            'name' => 'Administrator',
            'email' => 'tek2991@gmail.com',
            'role_id' => Role::where('name', 'admin')->first()->id,
        ]);

        $this->command->info('Admin seeded!');
    }
}
