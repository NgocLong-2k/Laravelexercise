<?php

namespace Database\Seeders;

use App\Models\ReceiptDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceiptDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receipt_details')->truncate();
        ReceiptDetail::factory()
            ->count(30)
            ->create();
    }
}
