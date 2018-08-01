<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Lucas Emanuel',
            'email' => 'lucasefr@gmail.com',
            'password' => bcrypt('123456'),
            'telefone' => '031991416436',
        ]);
        
    }
}
