<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class GameUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->command->info('Game User seeding started.');

        DB::table('game_user')->insert([
            'game_id'=>7,
            'user_id'=>5,
            'score'=>null,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('game_user')->insert([
            'game_id'=>1,
            'user_id'=>2,
            'score'=>2500,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('game_user')->insert([
            'game_id'=>3,
            'user_id'=>3,
            'score'=>500,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('game_user')->insert([
            'game_id'=>3,
            'user_id'=>4,
            'score'=>1000,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('game_user')->insert([
            'game_id'=>2,
            'user_id'=>2,
            'score'=>1000,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('game_user')->insert([
            'game_id'=>3,
            'user_id'=>2,
            'score'=>1500,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('game_user')->insert([
            'game_id'=>2,
            'user_id'=>3,
            'score'=>500,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('game_user')->insert([
            'game_id'=>1,
            'user_id'=>4,
            'score'=>3000,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        $this->command->info('Score seeding successful.');
    }
}
