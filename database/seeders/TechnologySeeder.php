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
     */
    public function run(): void
    {
        $technologies = [
            'HTML',
            'CSS',
            'JavaScript',
            'PHP',
            'Python',
            'Java',
            'C#',
            'Vue',
            'React',
            'Laravel',
        ];

        foreach ($technologies as $element) {
            $newTechnologies = new Technology();
            $newTechnologies->name = $element;
            $newTechnologies->slug = Str::slug($newTechnologies->name);
            $newTechnologies->save();
        }
    }
}
