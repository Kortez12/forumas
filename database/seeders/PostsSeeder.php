<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->DB::insert('insert into posts (id, title, body) values', ['3', 'pirmas', 'pisksakksk']);
    }
}
       // DB::table('users')->DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])