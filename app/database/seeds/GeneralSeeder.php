<?php
class GeneralSeeder extends Seeder {
    public function run() {
        DB::table('users')->delete();
        DB::table('employees')->delete();
        User::create([
            'username'=>'admin',
            'password'=>Hash::make('12345')
        ]);
        User::create([
            'username'=>'admin2',
            'password'=>Hash::make('12345')
        ]);

        Employee::create([
            'name'=>'Jose Quintanilla'
        ]);
        Employee::create([
            'name'=>'Jose Perez'
        ]);
        Employee::create([
            'name'=>'Jose Salvado'
        ]);
        Employee::create([
            'name'=>'Jose Cruz'
        ]);
        Employee::create([
            'name'=>'Luis Martinez'
        ]);
        Employee::create([
            'name'=>'Maria Ochoa'
        ]);
        Employee::create([
            'name'=>'Pedro Sanchez'
        ]);
        Employee::create([
            'name'=>'Jose Alejo'
        ]);
    }
}
