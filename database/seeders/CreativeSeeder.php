<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Creative;

class CreativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Creative::factory()->count(20)->make();
    }
}
