<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create([
        	'name' => 'Hisham Admin',
        	'email' => 'hisham.hsbr@gmail.com',
        	'password' => bcrypt('hsbr@gmail.com'),
            'created_by' => '1',
            'updated_by' => '1',
        	'status' => '1'
        ]);


     $role = Role::create(['name' => 'Admin','status'=>'1','created_by' => '1','updated_by' => '1',]);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);



        Role::create([
            'name' => 'Writer',
            'status'=>'1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Role::create([
            'name' => 'User',
            'status'=>'1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
    }
}
