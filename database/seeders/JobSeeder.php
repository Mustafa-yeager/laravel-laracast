<?php

namespace Database\Seeders;

use App\Models\job_list;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        job_list::factory(20)->create();
    }
}
