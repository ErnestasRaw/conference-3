<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conference;

class ConferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conference::create([
            'name' => 'AAA',
            'date' => '2024-04-21',
            'location' => 'Vilnius',
            'description' => 'Konferencija.',
        ]);
    }
}
