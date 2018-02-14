<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $param = [
            "book_name" => "a",
            "book_introduction" => "a1",
            "book_code" => "a111111"
        ]
        DB::table("book") -> insert($param);
    }
}
