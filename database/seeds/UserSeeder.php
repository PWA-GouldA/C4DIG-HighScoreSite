<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('User seeding started.');

        //
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => 'secret',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'eileen',
            'email' => 'eileen@example.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => 'secret',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'jacques',
            'email' => 'jacques@example.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => 'secret',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'robyn',
            'email' => 'robyn@example.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => 'secret',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'isaac',
            'email' => 'isaac@example.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => 'secret',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'bob',
            'email' => 'bob@example.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => 'secret',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        $this->command->info('User seeding successful.');

    }
}
