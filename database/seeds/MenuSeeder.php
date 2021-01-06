<?php

use Dcat\Admin\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::query()->insert([
            ['']
        ]);
    }
}
