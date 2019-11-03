<?php

use Illuminate\Database\Seeder;

class ThreadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count =100;
        factory(\App\Models\Thread::class,$count)->create();
    }
}
