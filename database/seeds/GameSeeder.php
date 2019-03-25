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
        $diff = rand(0, 360) / 60;

        DB::table('games')
            ->insert([
                         'name'         => 'Sleep and Destroy',
                         'developer_id' => 1,
                         'created_at'   => Carbon::now()->subSeconds($diff + 1)->format('Y-m-d H:i:s'),
                         'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                     ]);
        DB::table('games')
            ->insert([
                         'name'         => 'Quick Draw',
                         'developer_id' => 2,
                         'created_at'   => Carbon::now()->subSeconds($diff + 3)->format('Y-m-d H:i:s'),
                         'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                     ]);
        DB::table('games')
            ->insert([
                         'name'         => 'Tiny Tower Defense',
                         'developer_id' => 1,
                         'created_at'   => Carbon::now()->subSeconds($diff + 4)->format('Y-m-d H:i:s'),
                         'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                     ]);

        DB::table('games')
            ->insert([
                         'name'         => 'Duck Race: Superduck',
                         'developer_id' => 3,
                         'created_at'   => Carbon::now()->subSeconds($diff + 4)->format('Y-m-d H:i:s'),
                         'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                     ]);

        DB::table('games')
            ->insert([
                         'name'         => 'Duck Race: Roboduck',
                         'developer_id' => 3,
                         'created_at'   => Carbon::now()->subSeconds($diff + 5)->format('Y-m-d H:i:s'),
                         'updated_at'   => Carbon::now()->addSeconds($diff - 2)->format('Y-m-d H:i:s'),
                     ]);

        DB::table('games')
            ->insert([
                         'name'         => 'Monotony',
                         'developer_id' => 3,
                         'created_at'   => Carbon::now()->subSeconds($diff + 5)->format('Y-m-d H:i:s'),
                         'updated_at'   => Carbon::now()->addSeconds($diff + 6)->format('Y-m-d H:i:s'),
                     ]);

        DB::table('games')
            ->insert([
                         'name'         => 'Take All, Flatten Evil',
                         'developer_id' => 2,
                         'created_at'   => Carbon::now()->addSeconds($diff)->format('Y-m-d H:i:s'),
                         'updated_at'   => Carbon::now()->addSeconds($diff)->format('Y-m-d H:i:s'),
                     ]);

        $this->command->info('Game seeding successful.');

    }
}
