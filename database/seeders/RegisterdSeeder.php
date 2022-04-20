<?php

namespace Database\Seeders;

use App\Models\Registerd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisterdSeeder extends Seeder
{
    // private $seat_num=Registerd::latest('id')->pluck('id')->first();

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registerd::factory(50)->create();
    }
}
