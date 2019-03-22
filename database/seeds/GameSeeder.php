<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->command->info('Game seeding started.');

        DB::table('games')->insert([
            'name'=>'Sleep and Destroy',
            'developer_id'=>1,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('games')->insert([
            'name'=>'Quick Draw',
            'developer_id'=>2,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('games')->insert([
            'name'=>'Tiny Tower Defense',
            'developer_id'=>1,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        $this->command->info('Game seeding successful.');

    }
}
