<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uet_subjects')->insert(
            [
                [
                    'name' => 'Mạng máy tính',
//                    'user_id'=>1,
                    'created_at' => new DateTime()
                ],
                [
                    'name' => 'Nguyên lí hệ điều hành',
//                    'user_id'=>1,
                    'created_at' => new DateTime()

                ],
                [
                    'name' => 'Toán rời rạc',
//                    'user_id'=>1,
                    'created_at' => new DateTime()

                ]
            ]
        );
    }
}
