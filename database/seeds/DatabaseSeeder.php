<?php

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $threads = factory(Thread::class, 50)->create();
        $threads->each(function ($thread) {
            factory(Reply::class, 20)->create(['thread_id' => $thread->id]);
        });
        //$this->call(UsersTableSeeder::class);
        //$this->call(ThreadsSeeder::class);
    }
}
