<?php

namespace Database\Seeders;

use App\Models\DeliveryNoteDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryNoteDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('delivery_note_details')->truncate();
        DeliveryNoteDetail::factory()
            ->count(20)
            ->create();
    }
}
