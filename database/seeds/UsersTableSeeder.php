<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::load(database_path('data/users.csv'), function($results) {

            $results->each(function($sheet) {
                $now = date('Y-m-d H:i:s');
                $temp = $sheet->toArray();

                DB::table('users')->insert(array(
                    'id' => $temp['id'] ,
                    'email' => $temp['email'] ,
                    'email_id' => $temp['email_id'] ,
                    'email_addr' => $temp['email_addr'] ,
                    'name' => $temp['name'] ,
                    'password' => $temp['password'] ,
                    'user_hp' => $temp['user_hp'] ,
                    'created_at' => $now ,
                    'updated_at' => $now
                ));
            });

        });
    }
}

