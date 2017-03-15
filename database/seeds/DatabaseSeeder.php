<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->command->info('users table seeded');

        $this->call(Common_cdsTableSeeder::class);
        $this->command->info('common_cds table seeded');
    }
}
