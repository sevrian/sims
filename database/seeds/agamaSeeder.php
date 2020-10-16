<?php

use App\Models\Master\Agama;
use Illuminate\Database\Seeder;

class agamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Agama::class, 100)->create();
    }
}
