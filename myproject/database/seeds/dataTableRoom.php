<?php

use Illuminate\Database\Seeder;

class dataTableRoom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake  = Faker\Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('room')->insert([
                'loai_phong' => $fake->name,
                'price' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'email' => $fake->unique->email,
                'description' => $fake->sentence(15)
            ]);
        }
    }
}
