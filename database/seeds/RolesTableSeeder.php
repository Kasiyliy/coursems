<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $admin = new Role();
        $admin->name="Админ";
        $admin->save();

        $client = new Role();
        $client->name="Клиент";
        $client->save();
    }
}
