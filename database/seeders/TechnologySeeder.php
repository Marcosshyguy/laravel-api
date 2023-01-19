<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types_of_technologies = ['HTML', 'Css', 'Javascript', 'Vue', 'Php', 'Bootstrap', 'Laravel'];
        foreach ($types_of_technologies as $type) {
            $new_type = new Technology();
            $new_type->technology_name = $type;
            $new_type->slug = Str::slug($type);
            $new_type->save();
        }
    }
}
