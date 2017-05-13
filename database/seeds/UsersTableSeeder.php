<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uet_users')->insert(
            [
                [
                    'name'=>'Lương Văn Quý',
                    'email'=>'luongquy0810@gmail.com',
                    'password'=>bcrypt('12345'),
                    'level'=>1,
                    'created_at'=>new DateTime(),
                ],
                [
                    'name'=>'Lương Văn Quý',
                    'email'=>'luongquy.vnu@gmail.com',
                    'password'=>bcrypt('12345'),
                    'level'=>1,
                    'created_at'=>new DateTime(),
                ]
            ]
        );
    }
}
