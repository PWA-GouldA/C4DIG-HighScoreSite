<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class HighScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->command->info('High Score seeding started.');


        DB::table('high_scores')->insert([
            'game_id'=>0,
            'user_id'=>0,
            'score'=>null,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('high_scores')->insert([
            'game_id'=>1,
            'user_id'=>2,
            'score'=>1000,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('high_scores')->insert([
            'game_id'=>3,
            'user_id'=>3,
            'score'=>2000,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('high_scores')->insert([
            'game_id'=>3,
            'user_id'=>4,
            'score'=>1000,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('high_scores')->insert([
            'game_id'=>2,
            'user_id'=>2,
            'score'=>2000,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('high_scores')->insert([
            'game_id'=>3,
            'user_id'=>2,
            'score'=>3000,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('high_scores')->insert([
            'game_id'=>2,
            'user_id'=>3,
            'score'=>1000,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('high_scores')->insert([
            'game_id'=>1,
            'user_id'=>4,
            'score'=>4000,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        $this->command->info('High Score seeding successful.');

    }
}
