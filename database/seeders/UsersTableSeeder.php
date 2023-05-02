<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_user = Role::where('rolename', 'user')->first();
        $role_admin = Role::where('rolename', 'admin')->first();

        $people = new People();
        $people->firstname = 'Miguel';
        $people->lastname = 'Mateos';
        $people->email = 'user@example.com';
        $people->birthdate = '1981-05-26';
        $people->save();

        $user = new User();
        $user->username = 'User';
        $user->password = Hash::make('secret');
        $user->id = $people->id;
        //https://stackoverflow.com/questions/27765377/how-to-insert-record-with-many-belongsto-relations-in-laravel-eloquent
        $user->role()->associate($role_user);
        $user->save();
        //$user->role()->associate($role_user);

        $people = new People();
        $people->firstname = 'Roberto';
        $people->lastname = 'Carlos';
        $people->email = 'admin@example.com';
        $people->birthdate = '1971-05-26';
        $people->save();

        $user = new User();
        $user->username = 'Admin';
        $user->password = bcrypt('secret');
        $user->id = $people->id;
        $user->role()->associate($role_admin);
        $user->save();
        //$user->roles()->attach($role_user);

    }
}
