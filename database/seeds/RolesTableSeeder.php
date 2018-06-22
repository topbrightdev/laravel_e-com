<?php

use App\Shop\Roles\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        factory(Role::class)->create(['name' => 'admin']);
        factory(Role::class)->create(['name' => 'logistics']);
        factory(Role::class)->create(['name' => 'sales']);
        factory(Role::class)->create(['name' => 'accounts']);
        factory(Role::class)->create(['name' => 'clerk']);
    }
}