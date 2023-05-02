<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $menu_inicio = Menu::where('menu', 'Inicio')->first();
        $menu_menu = Menu::where('menu', 'Menus')->first();
        $menu_roles = Menu::where('menu', 'Roles')->first();
        $menu_usuarios = Menu::where('menu', 'Usuarios')->first();
        $menu_accesos = Menu::where('menu', 'Accesos')->first();
        

        $role = new Role();
        $role->rolename = 'sysadmin';
        $role->description = 'Super user';
        $role->level = 0;
        $role->save();
        $role->menus()->attach($menu_inicio);
        $role->menus()->attach($menu_menu);
        $role->menus()->attach($menu_roles);
        $role->menus()->attach($menu_usuarios);
        $role->menus()->attach($menu_accesos);

        $role = new Role();
        $role->rolename = 'admin';
        $role->description = 'Administrator';
        $role->level = 1;
        $role->save();
        $role->menus()->attach($menu_inicio);
        $role->menus()->attach($menu_menu);
        $role->menus()->attach($menu_roles);
        $role->menus()->attach($menu_usuarios);
        $role->menus()->attach($menu_accesos);

        $role = new Role();
        $role->rolename = 'dba';
        $role->description = 'Database Administrator';
        $role->save();
        $role->menus()->attach($menu_inicio);
        $role->menus()->attach($menu_menu);
        $role->menus()->attach($menu_roles);
        $role->menus()->attach($menu_usuarios);
        $role->menus()->attach($menu_accesos);

        $role = new Role();
        $role->rolename = 'director';
        $role->description = 'Director/Leader';
        $role->save();
        $role->menus()->attach($menu_inicio);
        $role->menus()->attach($menu_roles);
        $role->menus()->attach($menu_usuarios);
        $role->menus()->attach($menu_accesos);

        $role = new Role();
        $role->rolename = 'supervisor';
        $role->description = 'Supervisor';
        $role->save();
        $role->menus()->attach($menu_inicio);

        $role = new Role();
        $role->rolename = 'digitador';
        $role->description = 'Digitador';
        $role->save();
        $role->menus()->attach($menu_inicio);

        $role = new Role();
        $role->rolename = 'user';
        $role->description = 'User';
        $role->save();
        $role->menus()->attach($menu_inicio);
    }
}
