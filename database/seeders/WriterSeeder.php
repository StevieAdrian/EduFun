<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Writer::insert([
            [
                'name' => 'Raka Putra Wicaksono',
                'bio' => 'Spesialis Software Engineering'
            ],
            [
                'name' => 'Bia Mecca Annisa',
                'bio' => 'Spesialis Data Science'
            ],
            [
                'name' => 'Abi Firmansyah',
                'bio' => 'Spesialis Network Security'
            ],
        ]);
    }
}
