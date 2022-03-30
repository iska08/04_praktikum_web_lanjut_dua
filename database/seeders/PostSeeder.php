<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => 'Mark Sonny',
            'comment' => 'Praesent aliquam ex vel lectus ornare tritique. Nunc et eros quis enim feugiat tincidunt et vitae dui. Nullam consectetur justo ac ex laoreet rhoncus. Nunc id leo pretium, faucibus sapien vel, euismod turpis.'
        ]);
        DB::table('posts')->insert([
            'name' => 'Jewel Soft',
            'comment' => 'Nunc et eros quis enim feugiat tincidunt et vitae dui. Nullam consectetur justo ac ex laoreet rhoncus. Nunc id leo pretium, faucibus sapien vel, euismod turpis.'
        ]);
    }
}
