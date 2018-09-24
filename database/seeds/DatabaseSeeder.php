<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $totrunctetables = [
      'Lessons'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->totrunctetables as $tabel){
            DB::table($tabel)truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');


        $this->call(LessonsTableSeeder::class);
    }
}
