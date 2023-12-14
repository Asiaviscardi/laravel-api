<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Str;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['HTML', 'CSS', 'JavaScript', 'PHP', 'C++'];
        foreach($data as $techonology){
            $new_Technology = new Technology();
            $new_Technology->name = $techonology;
            $new_Technology->slug = Str::slug($techonology, '-');
            $new_Technology->save();
        }
    }
}
