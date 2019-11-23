<?php

use App\Models\Thread;
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
        factory(Thread::class,$count)->create();
    }
}
