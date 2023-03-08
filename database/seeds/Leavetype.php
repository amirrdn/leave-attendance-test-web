<?php

use Illuminate\Database\Seeder;

class Leavetype extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\MTypeLeave::create([
            'type_name'	=> 'Tahunan'
        ]);
    }
}
