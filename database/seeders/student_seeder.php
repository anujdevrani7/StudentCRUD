<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;


class student_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        student::create([
            'fist_name'=>'Anuj',
            'last_name'=>'Devrani',
            'father_name'=>'Manoj Devrani'
        ]);
        //
    }
}
