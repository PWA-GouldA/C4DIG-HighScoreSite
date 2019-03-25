<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->command->info('Developer seeding started.');
        $diff = rand(0, 360) / 60;

        DB::table('developers')
            ->insert([
                         'name'       => 'TAFE OS',
                         'created_at' => Carbon::now()->subSeconds($diff + 1)->format('Y-m-d H:i:s'),
                         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                     ]);

        DB::table('developers')
            ->insert([
                         'name'       => 'M3 Studios',
                         'created_at' => Carbon::now()->subSeconds($diff)->format('Y-m-d H:i:s'),
                         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                     ]);

        DB::table('developers')
            ->insert([
                         'name'       => 'NMT Staff',
                         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                     ]);

        DB::table('developers')
            ->insert([
                         'name'       => 'It\'s the name of the Game',
                         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                         'updated_at' => Carbon::now()->addSeconds($diff)->format('Y-m-d H:i:s')
                     ]);

        DB::table('developers')
            ->insert([
                         'name'       => 'Logically Technical',
                         'created_at' => Carbon::now()->addSeconds($diff)->format('Y-m-d H:i:s'),
                         'updated_at' => Carbon::now()->addSeconds($diff)->format('Y-m-d H:i:s')
                     ]);

        $this->command->info('Developer seeding successful.');
    }
}
