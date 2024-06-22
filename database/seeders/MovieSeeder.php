<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('movies')->insert([
            'title' => 'Ant Man',
            'year' => '2008',
            'description' => 'Movie from Ant Man',
            'image' => 'storage/images/ant_man_ver3_xlg.jpg',
        ]);
    }
}