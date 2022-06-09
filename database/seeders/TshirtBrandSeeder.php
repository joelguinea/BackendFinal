<?php

namespace Database\Seeders;
use illuminate\Database\Console\Seeds\WithoutEvents;
use Illuminate\Database\Seeder;
use App\Models\Tshirt;


class TshirtBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Tshirt :: factory(50)->create(); 
    }
}
