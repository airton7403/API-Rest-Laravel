<?php

use App\Models\Immobile;
use Illuminate\Database\Seeder;

class ImmobileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Immobile::class, 500)->create();
    }
}
