<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'dangnamk55@gmail.com',
            'password' => '$2y$10$j02DfTr5WXGrmPYUJJSwH.doobI0UhsOZHj6KTjMz9r03AIx8AskK',
            'is_admin' => true,
            'active' => true,
        ]);
    }
}
