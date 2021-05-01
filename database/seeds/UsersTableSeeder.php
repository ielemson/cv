<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // DB::table('role_user')->truncate();
        $adminRole = Role::where('name','admin')->first();
        $admin = User::create([
            'name'=>'Elemson Ifeanyi',
            'email'=>'ielemson@gmail.com',
            'password'=>Hash::make('admin@!')
        ]);
    

        $admin->roles()->attach($adminRole);
}
}