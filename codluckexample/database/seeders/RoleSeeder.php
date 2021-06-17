<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Admin',
                'slug' => 'admin',
            ],
            [
                'name' => 'Editor',
                'slug' => 'editor',
            ],
            [
                'name' => 'Report',
                'slug' => 'report',
            ],
        ];

        Role::insert($roles);

        return 'Finished!';
    }
}
