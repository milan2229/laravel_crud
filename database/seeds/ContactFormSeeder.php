<?php

use Illuminate\Database\Seeder;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactforms')->insert([
            'your_name' => 'user01',
            'title' => 'test1',
            'email' => 'user01@gmail.com',
            'url' => 'https://user.com',
            'age' => '22',
            'gender' => '0',
            'contact' => 'test1',
        ]);
    }
}
