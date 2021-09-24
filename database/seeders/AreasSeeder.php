<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Areas;

class AreasSeeder extends Seeder
{
    public function run()
    {
        Areas::Factory(20)->create();
    }
}
