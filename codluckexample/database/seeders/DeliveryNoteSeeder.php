<?php

namespace Database\Seeders;

use App\Models\DeliveryNote;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('delivery_notes')->truncate();
        DeliveryNote::factory()
            ->count(10)
            ->create();
    }
}
