<?php

use Illuminate\Database\Seeder;

class GlobalAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'id' => 1,
            'name' => 'Administrador',
            'description' => 'Control total',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'id' => 2,
            'name' => 'General',
            'description' => 'Estandarización documental',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'id' => 3,
            'name' => 'Débitos y conciliación',
            'description' => 'Débitos y conciliación',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'id' => 4,
            'name' => 'Orden de compra',
            'description' => 'Orden de compra',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'id' => 5,
            'name' => 'Vinculación',
            'description' => 'Vinculación',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'id' => 6,
            'name' => 'Centrales de riesgos',
            'description' => 'General',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
