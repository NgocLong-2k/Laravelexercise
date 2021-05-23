<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            DepartmentSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
            ReceiptSeeder::class,
            ReceiptDetailSeeder::class,
            SupplierSeeder::class,
            DeliveryNoteSeeder::class,
            DeliveryNoteDetailSeeder::class,
            CustomerSeeder::class,

        ]);
    }
}
