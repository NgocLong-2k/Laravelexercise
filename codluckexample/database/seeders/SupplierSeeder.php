<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->truncate();
        DB::table('receipts')->truncate();
        Supplier::factory()
            ->count(30)
            ->hasReceipts(3)
            ->create();
    }
}
