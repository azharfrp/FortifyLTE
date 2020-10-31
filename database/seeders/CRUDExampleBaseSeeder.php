<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CRUDExampleBaseSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('crud_example_base')->insert([
            'crud_example_base_name' => '1st Data',
        ]);

        DB::table('crud_example_base')->insert([
            'crud_example_base_name' => '2nd Data',
        ]);

        DB::table('crud_example_base')->insert([
            'crud_example_base_name' => '3rd Data',
        ]);

        DB::table('crud_example_base')->insert([
            'crud_example_base_name' => '4th Data',
        ]);

        DB::table('crud_example_base')->insert([
            'crud_example_base_name' => '5th Data',
        ]);
    }
}
