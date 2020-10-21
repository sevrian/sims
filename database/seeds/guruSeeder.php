<?php

use App\Models\Master\Guru;
use Illuminate\Database\Seeder;

class guruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Guru::class, 100)->create();
    }
}
