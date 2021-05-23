<?php

namespace Database\Seeders;

use App\Models\Receipt;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceiptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receipts')->truncate();
        Receipt::factory()
            ->count(10)
            ->create();
    }
}
