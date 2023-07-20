<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\exam;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        exam::factory()->count(50)->create();
    }
}
