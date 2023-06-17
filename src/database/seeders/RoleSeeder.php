<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 1, 'name' => 'Super Admin', 'identifier' => 'super_admin'],
            ['id' => 2, 'name' => 'User', 'identifier' => 'user']
        ];

        Role::upsert($data, ['id'], ['name', 'identifier']);
    }
}
