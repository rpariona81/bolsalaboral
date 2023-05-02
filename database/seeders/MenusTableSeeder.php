<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menu = new Menu();
        $menu->menu = 'Inicio';
        $menu->order = '0';
        $menu->save();

        $menu = new Menu();
        $menu->menu = 'Menus';
        $menu->order = '1';
        $menu->save();

        $menu = new Menu();
        $menu->menu = 'Roles';
        $menu->order = '2';
        $menu->save();

        $menu = new Menu();
        $menu->menu = 'Usuarios';
        $menu->order = '3';
        $menu->save();

        $menu = new Menu();
        $menu->menu = 'Accesos';
        $menu->order = '4';
        $menu->save();
    }
}
