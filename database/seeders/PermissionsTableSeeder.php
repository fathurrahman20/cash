<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //permission dashboard
        Permission::create(['name' => 'dashboard.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.income', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.outcome', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.all', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.best_income_product', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.best_outcome_product', 'guard_name' => 'web']);

        //permission users
        Permission::create(['name' => 'users.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'users.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'users.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'users.delete', 'guard_name' => 'web']);

        //permission roles
        Permission::create(['name' => 'roles.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'roles.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'roles.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'roles.delete', 'guard_name' => 'web']);

        //permission permissions
        Permission::create(['name' => 'permissions.index', 'guard_name' => 'web']);

        //permission categories
        Permission::create(['name' => 'categories.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'categories.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'categories.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'categories.delete', 'guard_name' => 'web']);

        //permission banks
        Permission::create(['name' => 'banks.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'banks.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'banks.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'banks.delete', 'guard_name' => 'web']);


        //permission reports
        Permission::create(['name' => 'reports.index', 'guard_name' => 'web']);

        //permission transactions
        Permission::create(['name' => 'transaction.index', 'guard_name' => 'web']);
    }
}
