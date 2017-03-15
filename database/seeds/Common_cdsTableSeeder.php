<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class Common_cdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Excel::load(database_path('data/common_cds.csv'), function($results) {

            $results->each(function($sheet) {
                $now = date('Y-m-d H:i:s');
                $temp = $sheet->toArray();

                DB::table('common_cds')->insert(array(
                    'main_cd' => $temp['main_cd'] ,
                    'det_cd' => $temp['det_cd'] ,
                    'user_id' => $temp['user_id'] ,
                    'name' => $temp['name'] ,
                    'ref_1' => $temp['ref_1'] ,
                    'ref_2' => $temp['ref_2'] ,
                    'ref_3' => $temp['ref_3'] ,
                    'ref_4' => $temp['ref_4'] ,
                    'ref_5' => $temp['ref_5'] ,
                    'ref_6' => $temp['ref_6'] ,
                    'ref_7' => $temp['ref_7'] ,
                    'ref_8' => $temp['ref_8'] ,
                    'ref_9' => $temp['ref_9'] ,
                    'ref_10' => $temp['ref_10'] ,
                    'use_yn' => $temp['use_yn'] ,
                    'created_at' => $now ,
                    'updated_at' => $now
                ));
            });

        });
    }
}
