<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'libelle' => 'SuperAdmin',
            'permissions' => 1
        ]);

        DB::table('roles')->insert([
            'libelle' => 'admin',
            'permissions' => 2
        ]);

        DB::table('roles')->insert([
            'libelle' => 'employe',
            'permissions' => 4
        ]);

        DB::table('roles')->insert([
            'libelle' => 'client',
            'permissions' => 3
        ]);
    }
}
