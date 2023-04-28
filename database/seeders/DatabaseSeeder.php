<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $admin_user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mailinator.com',
        ]);
        $coordinator_user = User::factory()->create([
            'name' => 'Coordinator',
            'email' => 'coordinator@mailinator.com',
        ]);
        $participant_user = User::factory()->create([
            'name' => 'Participant 1',
            'email' => 'participant@mailinator.com',
        ]);

        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'coordinator']);
        $admin_user->assignRole($role1);
        $coordinator_user->assignRole($role2);
    }
}
