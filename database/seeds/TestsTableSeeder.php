<?php

use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uet_tests')->insert(
            [
                [
                    'name'=>'Môn mạng máy tính: Đề số 1',
                    'slug'=>str_slug('Môn mạng máy tính: Đề số 1'),
                    'subject_id'=>1,
                    'created_at'=> new DateTime()
//                    'user_id'=>1
                ],
                [
                    'name'=>'Môn mạng máy tính: Đề số 2',
                    'slug'=>str_slug('Môn mạng máy tính: Đề số 2'),
                    'subject_id'=>1,
                    'created_at'=> new DateTime()
//                    'user_id'=>1
                ],
                [
                    'name'=>'Môn mạng máy tính: Đề số 3',
                    'slug'=>str_slug('Môn mạng máy tính: Đề số 3'),
                    'subject_id'=>1,
                    'created_at'=> new DateTime()
//                    'user_id'=>1
                ],
                [
                    'name'=>'Môn mạng máy tính: Đề số 4',
                    'slug'=>str_slug('Môn mạng máy tính: Đề số 4'),
                    'subject_id'=>1,
                    'created_at'=> new DateTime()
//                    'user_id'=>1
                ],
                [
                    'name'=>'Môn Nguyên lí hệ điều hành: Đề số 1',
                    'slug'=>str_slug('Môn mạng máy tính: Đề số 1'),
                    'subject_id'=>2,
                    'created_at'=> new DateTime()
//                    'user_id'=>1
                ],
                [
                    'name'=>'Môn Nguyên lí hệ điều hành: Đề số 2',
                    'slug'=>str_slug('Môn mạng máy tính: Đề số 2'),
                    'subject_id'=>2,
                    'created_at'=> new DateTime()
//                    'user_id'=>1
                ],
                [
                    'name'=>'Môn Nguyên lí hệ điều hành: Đề số 3',
                    'slug'=>str_slug('Môn mạng máy tính: Đề số 3'),
                    'subject_id'=>2,
                    'created_at'=> new DateTime()
//                    'user_id'=>1
                ],
                [
                    'name'=>'Môn Nguyên lí hệ điều hành: Đề số 4',
                    'slug'=>str_slug('Môn mạng máy tính: Đề số 4'),
                    'subject_id'=>2,
                    'created_at'=> new DateTime()
//                    'user_id'=>1
                ]
            ]
        );
    }
}
